@extends('layouts.app')
@section('title','Product' )
@section('content')
    <div class="container mx-auto flex flex-wrap py-4">
  
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
              
                    <img style="height:500px;width:1000px" src="{{asset('storage/'.$product->image)}}">
              
                <div class="bg-white flex flex-col justify-start p-6">
                  <div class="flex justify-between">
                    <div class="">
                      <p class="text-3xl font-bold text-green-700 pb-4"> {{ $product->title }}</p>
                    </div>
                  
                   
                      <div class="m-3">
                        <p class="text-green-700">Presentations: {{ $product->Presentations}}</p>
                        <p class="text-green-700">Ref. ID: {{$product->RefID}}</p>
                      </div>
                    
                  </div>
                 
              
              <p> {!! $product_body !!}  </p>    
                  
                  
                
                 
                   
                </div>
            </article>

      
       

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
          
            <div class="w-full bg-white shadow flex flex-col my-2 p-4 border-t-8 border-blue-700 ">
             
                <p class="content-center text-xl  text-white-700 font-semibold pb-5">Download center</p>
              
                <div class="flex">
                    <a class="border-0" download="{{$new_file_name}}" href="{{ $new_file_path }}"><button class="w-36 m-1 bg-green-600 hover:bg-green-800 text-black-700 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>Instructions</span>
                      </button></a>
                    
                      <a class="border-0 ml-4" download="{{ $new_file_name2 }}" href="{{ $new_file_path2 }}"><button class="w-36 m-1 bg-green-600 hover:bg-green-800 text-black-700 font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <span>SDF</span>
                      </button></a>
                </div>
            </div>

          

            <div class="w-full bg-white shadow flex flex-col my-4 p-6 border-t-8 border-blue-700">
              <p class="text-xl  font-semibold pb-5">Categories</p>
 
   
 

              <p class="block bg-green-600 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent  dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200  focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" ></p>  
    
        <ul class=" divide-gray-300 ml-3">
          @foreach ($products as $product)
    
      <li class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        <a href="/products/{{ $product->id }}">  {{ $product->title }}</a>
       </li>
    @endforeach 
        
        </ul>
    
  
      
      @foreach ($categories as $category)
  
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('products',['category_id'=>$category->id]) }}">{{ $category->name }}</a>              
   
   
      @endforeach
           
         
            

        </aside>

    </div>

 



@endsection