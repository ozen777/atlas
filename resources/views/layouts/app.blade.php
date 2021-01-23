<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <title>@yield('title')</title>

    <style>
      
      /* first slider */
       .swiper-container {
      width: 100%;
      height: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
     
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
     /* end of first slider*/

      /* start of second slider*/
      .swiper-container2 {
      width: 1200px;
      height: 300px;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
     
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    #map{
      height: 400px;
      width: 100%;
    }

    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
    </style>
     <!-- AlpineJS -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <!-- Font Awesome -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAutir_adKoq8l64AyHT6UgWK9ihbaSx1wY&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
</head>
<body class="bg-gray-100">
  <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-1 py-2  ">
    <div class="flex-1 flex justify-between items-center">
      <a href="/">
        <img class="w-48"  src="/img/logo.png" >
      </a>
  </div>

  <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
  <input class="hidden" type="checkbox" id="menu-toggle" />

  <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
    <nav>
      <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="/">Home</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="{{ route('productsCategory') }}">Products</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="/news">News</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="/aboutUs">About us</a></li>
        <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 lg:mb-0 mb-2" href="/contact">Contact Us</a></li>
      </ul>
    </nav>
  

  </div>

  </header>
  @include('layouts.messages')
    @yield('content')
    
 
    <!-- component -->
    <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
      <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
          <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
              
            <a href="/" class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start">
                  <span class="flex items-start sm:items-center">
                  <img src="/img/logo.png" alt="">
                  </span>
              </a>

            <p class="mt-6 mr-4 text-base text-gray-500"></p>

          </div>

          <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
              <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                  <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                      Home
                  </li>
                  <li>
                    <a href="/products-category" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Products</a>
                  </li>

                  <li>
                    <a href="/news" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">News</a>
                  </li>

                  <li>
                    <a href="/aboutUs" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Abouts us</a>
            </li>

            <li>
              <a href="/contact" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Contact us</a>
            </li>
                  
              </ul>


              <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                  <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">  
                     Company</li>
                  <li>
                    <a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                  </li>

                  <li>
                    <a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">
                      Terms of Service</a>
                    </li>
              </ul>

              <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none mr-3">
                <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                    Products</li>
                <li>
                  <a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Blood Grouping
                        Reagents
                  </a>
                </li>
                <li>
                  <a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Latex Agglutination
                  Kits
                 </a>
                </li>

                  <li>
                    <a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Febrile Antigen
                    Reagents</a>
                  </li>
            </ul>

           
              <div class="flex flex-col w-full text-gray-700">
                  <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us</div>
                  <div class="flex justify-start pl-4 mt-2">
                      <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                          target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                          <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                          </svg>
                      </a>
                      <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                          target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                          <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                          </svg>
                      </a>
                    
                  </div>
              </div>
          </div>
      </div>
      <div class="pt-4 pt-6 mt-10 text-center text-gray-400 border-t border-gray-100">© VeroTest.</div>
  </footer>
</body>





<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    var swiper = new Swiper('.swiper-container2', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    
</script>


</html>