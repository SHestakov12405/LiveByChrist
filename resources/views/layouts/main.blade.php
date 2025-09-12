<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Icons -->
        <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
        <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
        <meta name="apple-mobile-web-app-title" content="Регистрация" />
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    {{-- <body class="font-sans min-h-dvh text-gray-900 bg-[rgb(20,20,20)] antialiased bg-[url(/public/assets/images/fon.jpg)] bg-cover bg-center md:bg-[url(/public/assets/images/fonmax.jpg)] bg-no-repeat bg-fixed"  style=""> --}}
    <body class="min-h-dvh font-daneehand text-gray-900 bg-black antialiased">
        <div>
            {{ $slot }}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            const headerImage = document.getElementById('header-image');
            const content = document.getElementById('content');
            
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY;
                const imageHeight = headerImage.offsetHeight;
                
                // Уменьшаем непрозрачность и смещаем картинку при скролле
                if (scrollPosition > 0) {
                    const opacity = 1 - Math.min(scrollPosition / imageHeight, 0.8);
                    headerImage.style.opacity = opacity;
                    headerImage.style.transform = `translateY(-${scrollPosition * 0.5}px)`;
                } else {
                    headerImage.style.opacity = 1;
                    headerImage.style.transform = 'translateY(0)';
                }
            });
        });
        </script>
    </body>

</html>
