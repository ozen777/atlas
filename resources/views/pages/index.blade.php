@extends('layouts.app')

@section('content')
 
<!-- slider -->
<div class="header swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="bg-cover bg-center" src="{{asset('storage/'.$image->image1)}}">
      </div>
      <div class="swiper-slide">
        <img class="object-fill" src="/img/4.jpg">
      </div>
      <div class="swiper-slide">
        <img class="object-fill" src="/img/6.jpg">
      </div>
      <div class="swiper-slide">
        <img class="object-fill" src="/img/1.jpg">
      </div>
    
    </div>
    <!-- Add Pagination -->
   
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <!-- end of slider -->

  <!-- first section Products Profile -->
  
<section class="blog text-gray-700 body-font" >
        <!--header section -->
  <div class="container px-5 py-20 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl text-green-700 font-medium title-font mb-2">{{ $section1->title }}</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-base">
        {{ $section1->description }}
      </p>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <!--end of header section -->


          <!-- first card -->
          @foreach ($categories as $category)
          <div class="card1 p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center">
              <img src="{{asset('storage/'.$category->image)}}">
            </div>
    
            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
              
              <div class="header-content flex ">
                <div class="category-badge flex  h-4 w-4  rounded-full m-1 bg-blue-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-blue-700 " ></div>
                </div>
                <div class="category-title flex-1 text-sm">{!! $category->name !!}</div>
               
                
              </div>
              
              <div class="summary-post text-base text-justify">
                <p>{!! $category->description !!}</p>
                <button class="bg-green-100 text-green-700 mt-4 block rounded p-2 text-sm "><span class="">Learn more</span></button>
              </div>
             
            </div>
          </div>
          @endforeach
      

     
    </div>
  </div>
</section>
    <!-- end of first section Products Profile -->

     <!-- second section Products Profile -->

<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-2xl text-green-700 font-semibold tracking-wide uppercase">{{ $section2->title }}</h2>
    </div>

    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="section2 flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
              <!--  -->
              <img src="{{asset('storage/'.$section2->card1_image)}}">
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              {{ $section2->card1_title }}
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              {!! $section2->card1_description !!}           </dd>
          </div>
        </div>

        <div class="section2 flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
              <!-- Heroicon name: scale -->
              <img src="{{asset('storage/'.$section2->card2_image)}}">
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              {{ $section2->card2_title }}
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              {!! $section2->card2_description !!}  
            </dd>
          </div>
        </div>

        <div class="section2 flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
              <!-- Heroicon name: lightning-bolt -->
              <img src="{{asset('storage/'.$section2->card3_image)}}">
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              {{ $section2->card3_title }}
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              {!! $section2->card3_description !!}  
            </dd>
          </div>
        </div>

        <div class="section2 flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md  text-white">
              <!-- Heroicon name: annotation -->
              <img src="{{asset('storage/'.$section2->card4_image)}}">
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              {{ $section2->card1_title }}
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              {!! $section2->card4_description !!}  
            </dd>
          </div>
        </div>
      </dl>
    </div>
  </div>
</div>


     <!--end of second section Products Profile -->
     <div class="lg:text-center m-4">
      <h2 class="text-base text-2xl text-green-700 font-semibold tracking-wide uppercase">news & events</h2>
     
     
    </div>
      <!--second Swiper -->
  <div class="swiper-container2 mb-4">
    <div class="swiper-wrapper">
      @foreach ($news as $new)
      <div class="swiper-slide flex flex-col ">
        <img class="pb-1" style="height:300px;" src="{{asset('storage/'.$new->image)}}" alt="">    
        <p></p>
        <a href="/news/{{$new->id}}">{{ $new->title }}</a> 
      </div>      
      @endforeach
      
      
    </div>
    <!-- Add Pagination -->
   
  </div>
      <!--end of second Swiper -->
 
  <!--Contact us  -->
 
      <div class="lg:flex bg-white mt-2">
        <div class="flex-1 lg:ml-44 pt-3">
          <!-- component -->
          <p class="text-2xl mb-2">Contact us</p>
          <div class="w-full max-w-lg">
            {!! Form::open(['action' => 'HomeController@store','method'=>'POST']) !!}
            
            <div class="flex flex-wrap -mx-3 mb-6 ">
              <div class="w-full px-3 ">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Name
              </label>
              
              {{Form::text('name','',['class' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500','placeholder'=> 'name'])}}
              </div>
              </div>
        
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  E-mail
                </label>
                {{Form::text('email','',['class' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500','placeholder'=> 'email'])}}
              
                </div>
                </div>
        
        
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Message
                  </label>
                  {{Form::textarea('message','',['class' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500','placeholder'=> 'message'])}}
                
                  </div>
                  </div>
        
                  <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                  
                    {{ Form::submit('send',['class'=>'btn shadow bg-blue-700 hover:bg-blue-900 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded','type'=>'button']) }} 
                    </div>
                    <div class="md:w-2/3"></div>
                    </div>
        
                  </div>
                  {!! Form::close() !!}
        </div>
        <div class="lg:flex-1 mt-16 mr-5 " >
          <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
              <h1 class="text-4xl sm:text-5xl text-green-600 dark:text-white font-extrabold tracking-tight">
                  Get in touch
              </h1>
              <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                  Fill in the form to start a conversation
              </p>
    
              <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                  <div class="ml-4 text-md tracking-wide font-semibold w-40">
                       Technology Park Malaysia
                  </div>
              </div>
    
              <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                  </svg>
                  <div class="ml-4 text-md tracking-wide font-semibold w-40">
                      +6017-8854041
                  </div>
              </div>
    
              <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                  <div class="ml-4 text-md tracking-wide font-semibold w-40">
                      info@email.com
                  </div>
              </div>
          </div>
       
          
          
        </div>
        </div>
       
      </div>
        <!--Contact us  -->
@endsection