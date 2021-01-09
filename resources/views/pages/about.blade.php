@extends('layouts.app')

@section('content')
<div class="w-full bg-cover bg-center mt-1" style="height:30rem; background-image: url(/img/1.jpg);">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
        <div class="text-center">
            <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">About us</h1>
            
        </div>
    </div>
</div>

<div>
    <div class="bg-gray-100 lg:py-12 lg:flex lg:justify-center mb-3">
        <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('/img/1.jpg')"></div>
            </div>
            <div class="py-12 px-6 max-w-xl lg:max-w-5xl lg:w-1/2">
                <h2 class="text-3xl text-gray-800 font-bold">About us <span class="text-indigo-600">Text</span></h2>
                <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem modi reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam mollitia iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.</p>
              
            </div>
        </div>
    </div> 
</div>

<div class="px-4 mb-5">
    <div class="block md:flex justify-between md:-mx-2">
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="/img/2.jpg" alt="">
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              Title
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque porro id commodi quisquam debitis!
            </div>
           
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="/img/5.jpg" alt="">
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              Title
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure aut quia alias ullam eveniet sunt! Ipsa, sunt. Inventore ipsum sit quasi. Alias quasi officiis blanditiis!
            </div>
          
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="/img/3.jpg" alt="">
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
             title
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nemo magni saepe cumque error quia quae sint ducimus, maiores doloremque.
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>

 
@endsection