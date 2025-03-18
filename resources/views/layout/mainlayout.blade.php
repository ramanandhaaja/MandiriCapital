{{-- resources/views/layout/mainlayout.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Mandiri Capital</title>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" 
         rel="stylesheet" 
         crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" 
         rel="stylesheet" 
         crossorigin="anonymous">

   <!-- Icons -->
   <link rel="stylesheet" 
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
         integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS"
         crossorigin="anonymous">

   <!-- Styles -->
   <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
   @yield('localcss')

   @stack('styles')
</head>
<body class="font-sans antialiased min-h-screen flex flex-col">
   @include('partials.topnav')

   <main class="flex-grow">
       @yield("container")
   </main>

   @include('partials.footer')

   <!-- Scripts -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
           integrity="sha384-g4NTh/Iv5PPU4xPyhEWqPcwtNXOvdaDI8LLnyYfyNZOjKJeYQyjzQ9X5275eBjpt"
           crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
           integrity="sha384-Z3REaz79l2IaAZqJsSABtTbhjgOUYyV3p90XNnAPCSHg3EMTz1fouunq9WZRtj3d"
           crossorigin="anonymous"></script>

   @stack('scripts')
   @yield("scripts")
</body>
</html>
