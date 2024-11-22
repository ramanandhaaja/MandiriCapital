{{-- resources/views/layout/mainlayout.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ $title ?? config('app.name') }}</title>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

   <!-- Icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Styles -->
   <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
   <link href="{{ asset('css/scroll-animation.css') }}" rel="stylesheet">
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
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/scroll-animation.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

   @stack('scripts')
</body>
</html>
