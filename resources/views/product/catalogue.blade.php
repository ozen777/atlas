@extends('layouts.app')

@section('title','Products' )
@section('content')


 <div style="position: relative;text-align: center;">
    <img class="object-fill w-full bg-cover bg-center mt-1" style="height:25rem; " src="{{asset('storage/'.$categoryImage)}}" alt="">
    <div style="position: absolute;top: 50%;left: 50%;
    transform: translate(-50%, -50%);" class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
        <div class="text-center">
            <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">{{ $categoryName }}</h1>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
  <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between" style="background: #205486;">
      <a href="#" style="color: white" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Product categories</a>
      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <hr>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
        <p class="block bg-green-600 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent  dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200  focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" >{{ $categoryName }}</p>   
        @foreach ($categories as $category)
        @if ($category->name != $categoryName)
        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('products',['category_id'=>$category->id]) }}">{{ $category->name }}</a>              
        @endif
     
        @endforeach
    </nav>
  </div>
   <!-- component -->
   <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8 w-full">
  
    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
        <table class="min-w-full">
            <thead>
               
                <tr>
                   
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-gray-600 tracking-wider">Products</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-gray-600 tracking-wider">Presentations</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-gray-600 tracking-wider">Ref. ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-gray-600 tracking-wider">Instructions
                        PDF</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-gray-600 tracking-wider">SDS PDF</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                </tr>
               
            </thead>
            <tbody class="bg-white">
                @foreach ($products as $product)     
                @php
                       $new_file = json_decode($product->Instructions)[0];
                       $new_file_path = Voyager::image($new_file->download_link);
                       $new_file_name = $new_file->original_name; //if you need original file name
                       $new_file2 = json_decode($product->SDS)[0];
                       $new_file_path2 = Voyager::image($new_file2->download_link);
                       $new_file_name2 = $new_file2->original_name; //if you need original file name
                @endphp 
             
                <tr>
                      
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                            <div class="text-sm leading-5 text-blue-700">{{ $product->title }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-700 border-gray-500 text-sm leading-5">	
                            {{ $product->Presentations}}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-700 border-gray-500 text-sm leading-5">{{ $product->RefID }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-700 border-gray-500 text-sm leading-5">
                            <a class="border-0" download="{{$new_file_name}}" href="{{ $new_file_path }}">  
                            <img class="ml-4" src="https://img.icons8.com/color/48/000000/download--v1.png"/>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-700 text-sm leading-5">
                            <a class="border-0" download="{{$new_file_name2}}" href="{{ $new_file_path2 }}"><img class="ml-3" src="https://img.icons8.com/color/48/000000/download--v1.png"/></a>
                            </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                           <a href="/products/{{ $product->id }}"><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button></a> 
                        </td>
              </tr>
                   @endforeach
            </tbody>
        </table>
      <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">


</div>
    </div>
</div>
</div>
 
@endsection