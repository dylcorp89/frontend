<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('\css/swiper.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css">


</head>
  <body>

        <header>
            <div class=" bg-gradient-to-r from-[#15549a] via-[#15549a] to-[#15549a] border-b border-white/50 shadow-2xl items-center w-full  text-white px-5 py-1">
                <div class="flex items-center justify-between">
                 <a href="{{ route('home') }}">  <img src="{{ asset("img/logo_nsia.png") }}" alt="" class=" h-20">
                 </a> 
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" class="text-sm font-bold hover:text-[#bc872b]">Accueil</a>

                        <a href="{{ route('simulate') }}" class="text-sm font-bold hover:text-[#bc872b]">Simulateur</a>
                        <a href="#" class="text-sm font-bold hover:text-[#bc872b]">Aide</a>
                    </div>
                </div>
            </div>
        </header>






        @yield('content')




    <footer class="shadow-lg  bg-dark items-center w-full h-10 text-white px-5 py-3 fixed bottom-0">
    <script src="{{ asset('\js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('\js/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('\js/main.js') }}"></script>
  </body>
</html>
