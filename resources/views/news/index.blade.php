

@extends('layouts.app')

@section('content')
<div class="w-full bg-cover bg-center " style="height:25rem; background-image: url(/img/1.jpg);">
  <div class="flex items-center justify-center object-fill  h-full w-full bg-gray-900 bg-opacity-50">
      <div class="text-center">
          <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl"></h1>
          
      </div>
  </div>
</div>
    <div class="container mx-auto flex flex-wrap py-4">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

          
          <div class="m-5 p-5 bg-white" >
            <p class="text-2xl border-b-2 border-green-600 w-36 ">Recent news</p>
            @foreach ($news as $new)
            <div class="lg:flex bg-white rounded overflow-hidden shadow-md m-3 w-full  ">
              <a href="/news/{{$new->id }}"> <img class="w-80 h-40 p-1" src="{{asset('storage/'.$new->image)}}"  alt=""></a>  
              
              <div class="m-4">
             <a href="/news/{{$new->id }}"> <span class="font-bold text-blue-700">{{ $new->title }}</span></a>      
              <p class="block text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscingiquam porttitor massa et leo ultrices, ac rutrum elit volutpat. .</p>
              </div>
              
          </div>
        @endforeach
        </div>

      
       

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">


        
            

        </aside>

    </div>

 



@endsection