@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-wrap py-4">
  
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
              
                    <img style="height:500px;width:1000px"   src="{{asset('storage/'.$product->image)}}">
              
                <div class="bg-white flex flex-col justify-start p-6">
                  <div class="flex justify-between">
                    <a href="#" class="text-3xl font-bold text-green-700 pb-4">{{ $product->title }}</a>
                      <div>
                        <p class="text-green-700">Presentations: {{ $product->Presentations}}</p>
                        <p class="text-green-700">Ref. ID: {{$product->RefID}}</p>
                      </div>
                    
                  </div>
                 
                   
                    
                    <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna. Proin bibendum urna mattis ante malesuada ultrices. Etiam in turpis vitae elit dictum aliquet. Donec mattis risus in turpis dapibus, eget tempus sem tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In est enim, imperdiet sed ornare quis, pellentesque vel risus. Nunc vitae vestibulum turpis. Quisque eget eleifend urna. Etiam et vulputate purus, ut egestas sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis quis neque non urna venenatis mollis et at massa. Pellentesque sem lacus, malesuada vel hendrerit molestie, mollis vel elit.</p>
                    <h1 class="text-2xl font-bold pb-3">Heading</h1>
                    <p class="pb-3">Vivamus nec facilisis elit, quis congue justo. In non augue ex. Aenean pretium facilisis hendrerit. Sed sed imperdiet dui. Etiam faucibus a diam sed vehicula. Nullam commodo lacus tincidunt, tincidunt orci sed, dapibus leo. Vivamus vulputate quis risus a ultricies. Aliquam luctus id tellus non condimentum. Aenean maximus viverra ipsum eget vestibulum. Morbi ut tincidunt sem, efficitur volutpat tortor. Donec scelerisque, ipsum eu efficitur semper, neque turpis sodales quam, in aliquam elit lacus varius lorem. Ut ut diam id leo efficitur malesuada eget in velit. Pellentesque tristique orci nunc, vitae fermentum nibh luctus eu. Mauris condimentum justo sed ipsum egestas varius.</p>
                    <p class="pb-3">Sed sagittis odio a volutpat feugiat. Cras aliquam varius justo, a rhoncus ante bibendum id. Nulla maximus nisl sed enim maximus, ut dictum lectus hendrerit. Fusce venenatis tincidunt eros. Phasellus quis augue vulputate ipsum pellentesque fringilla. Morbi nec tempor felis. Maecenas sollicitudin pellentesque dui, sit amet scelerisque mauris elementum nec. Cras ante metus, mattis in malesuada in, fermentum a nunc. Suspendisse potenti. Sed tempor lacus sed commodo dignissim. Quisque dictum, dolor auctor iaculis cursus, ipsum urna porttitor ex, sed consequat nisi tellus eget ante. Duis molestie mollis eros, eu sollicitudin mauris lobortis quis.</p>
                    <p class="pb-3">Vivamus sed neque nec massa scelerisque imperdiet eget id sapien. Fusce elementum mi id malesuada luctus. Proin quis lorem id leo porta interdum non ac nisl. Integer nulla sem, ultrices sed neque eget, blandit condimentum metus. Aliquam eget malesuada sapien. Curabitur aliquet orci sit amet ex tincidunt convallis. Mauris urna mi, consequat mattis mollis a, dignissim eget sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam facilisis sem diam, viverra consequat metus consequat vel. Cras a mi eu ex luctus malesuada quis eu ante. Aliquam erat volutpat.</p>
                    <h1 class="text-2xl font-bold pb-3">Conclusion</h1>
                    <p class="pb-3">Donec vulputate auctor leo lobortis congue. Sed elementum pharetra turpis. Nulla at condimentum odio. Vestibulum ullamcorper enim eget porttitor bibendum. Proin eros nibh, maximus vitae nisi a, blandit ultricies lectus. Vivamus eu maximus lacus. Maecenas imperdiet iaculis neque, vitae efficitur felis vestibulum sagittis. Nunc a eros aliquet, egestas tortor hendrerit, posuere diam. Proin laoreet, ligula non eleifend bibendum, orci nulla luctus ipsum, dignissim convallis quam dolor et nulla.</p>
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

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
              <p class="text-xl text-blue-700 font-semibold pb-5">Categories</p>
 
   
  <p class="block bg-green-600 px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent  dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200  focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" >{{ $product->category->name }}</p>   
 
    
        <ul class=" divide-gray-300 ml-3">
          @foreach ($products as $product)
    
      <li class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">{{ $product->title }}</li>
    @endforeach 
        
        </ul>
    
  
      
      @foreach ($categories as $category)
      @if ($category->name != $product->category->name)
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('products',['category_id'=>$category->id]) }}">{{ $category->name }}</a>              
      @endif
   
      @endforeach
           
         
            

        </aside>

    </div>

 



@endsection