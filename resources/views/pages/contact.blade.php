  @extends('layouts.app')

  @section('content')

  <div id="map"></div>

  <div class="flex bg-white">
    <div class="flex-1 lg:ml-44 pt-3">
      <!-- component -->
      <p class="text-2xl mb-2">Contact us</p>
  <div class="w-full max-w-lg">
    {!! Form::open(['action' => 'ContactController@store','method'=>'POST']) !!}
    
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

          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              phoneNumber
            </label>
            {{Form::text('phoneNumber','',['class' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500','placeholder'=> 'phoneNumber'])}}
          
            </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                country
              </label>
              {{Form::text('Country','',['class' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500','placeholder'=> 'country'])}}
            
              </div>
              </div>

              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  company name
                </label>
                {{Form::text('companyName','',['class' => 'appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500','placeholder'=> 'companyName'])}}
              
                </div>
                </div>
      

          <div class="md:flex md:items-center mb-3">
            <div class="md:w-1/3">
          
            {{ Form::submit('send',['class'=>'btn shadow bg-blue-400 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded','type'=>'button']) }} 
            </div>
            <div class="md:w-2/3"></div>
            </div>

          </div>

        
  {!! Form::close() !!}
  </div>
   
      
    <div class="flex-1 mt-16 mr-5 " >
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




    <div>
        
    </div>


    
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 3.0474389279119793, lng: 101.68695467604412 },
          zoom: 15,
        });

        const marker = new google.maps.Marker({
            position: {lat:3.0474389279119793,lng:101.68695467604412},
            map: map,
          });
      }
    </script>
    <script defer
      src="https://maps.googleapis.com/maps/api/js?keyAIzaSyAutir_adKoq8l64AyHT6UgWK9ihbaSx1w&callback=initMap">
  </script>
  @endsection