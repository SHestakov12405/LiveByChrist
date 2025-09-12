<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Регистрация не прошла</title>

    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+SC:ital,wght@0,100..900;1,100..900&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=PT+Sans+Narrow:wght@400;700&family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Регистрация" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'PT Sans Narrow', sans-serif;
            background: linear-gradient(135deg, #6FA1D7 0%, #3F3E91 100%);
            /* background-attachment: fixed; фиксируем фон при скролле */
            background-size: cover;       /* растягиваем градиент на весь экран */
            background-repeat: no-repeat;
            min-height: 100vh;  
            height: 100%;
            margin: 0;
            padding: 0;
        }
        /* body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        } */
        
        /* Enhanced triangular decorative elements - more triangles with random rotations */
        .hero-triangle {
            position: absolute;
            z-index: 1;
            opacity: 0;
            animation: float 8s ease-in-out infinite;
        }
        .hero-triangle.visible { opacity:1; }

        /* Top edge triangles */
        .triangle-1 { 
            top: 5%; 
            left: 8%; 
            width: 0; 
            height: 0; 
            border-left: 50px solid transparent; 
            border-right: 50px solid transparent; 
            border-bottom: 85px solid rgba(158, 3, 3, 0.5);
            transform: rotate(15deg);
            animation-delay: 0s;
        }

        .triangle-2 { 
            top: 3%; 
            left: 25%; 
            width: 0; 
            height: 0; 
            border-left: 35px solid transparent; 
            border-right: 35px solid transparent; 
            border-bottom: 60px solid rgba(147, 51, 234, 0.5);
            transform: rotate(-25deg);
            animation-delay: 1s;
        }

        .triangle-3 { 
            top: 8%; 
            right: 15%; 
            width: 0; 
            height: 0; 
            border-left: 45px solid transparent; 
            border-right: 45px solid transparent; 
            border-bottom: 75px solid rgba(255, 62, 62, 0.5);
            transform: rotate(35deg);
            animation-delay: 2s;
        }

        .triangle-4 { 
            top: 2%; 
            right: 5%; 
            width: 0; 
            height: 0; 
            border-left: 60px solid transparent; 
            border-right: 60px solid transparent; 
            border-bottom: 100px solid rgba(245, 101, 101, 0.5);
            transform: rotate(-15deg);
            animation-delay: 3s;
        }

        /* Left edge triangles */
        .triangle-5 { 
            top: 25%; 
            left: 2%; 
            width: 0; 
            height: 0; 
            border-left: 40px solid transparent; 
            border-right: 40px solid transparent; 
            border-bottom: 70px solid rgba(251, 191, 36, 0.5);
            transform: rotate(45deg);
            animation-delay: 4s;
        }

        .triangle-6 { 
            top: 45%; 
            left: 1%; 
            width: 0; 
            height: 0; 
            border-left: 55px solid transparent; 
            border-right: 55px solid transparent; 
            border-bottom: 90px solid rgba(247, 215, 37, 0.5);
            transform: rotate(-30deg);
            animation-delay: 5s;
        }

        .triangle-7 { 
            top: 65%; 
            left: 3%; 
            width: 0; 
            height: 0; 
            border-left: 42px solid transparent; 
            border-right: 42px solid transparent; 
            border-bottom: 72px solid rgba(219, 49, 49, 0.5);
            transform: rotate(20deg);
            animation-delay: 6s;
        }

        /* Right edge triangles */
        .triangle-8 { 
            top: 30%; 
            right: 2%; 
            width: 0; 
            height: 0; 
            border-left: 48px solid transparent; 
            border-right: 48px solid transparent; 
            border-bottom: 82px solid rgba(231, 43, 43, 0.5);
            transform: rotate(-40deg);
            animation-delay: 1.5s;
        }

        .triangle-9 { 
            top: 50%; 
            right: 1%; 
            width: 0; 
            height: 0; 
            border-left: 38px solid transparent; 
            border-right: 38px solid transparent; 
            border-bottom: 65px solid rgba(115, 18, 18, 0.5);
            transform: rotate(25deg);
            animation-delay: 2.5s;
        }

        .triangle-10 { 
            top: 70%; 
            right: 3%; 
            width: 0; 
            height: 0; 
            border-left: 52px solid transparent; 
            border-right: 52px solid transparent; 
            border-bottom: 88px solid rgba(245, 101, 101, 0.5);
            transform: rotate(-20deg);
            animation-delay: 3.5s;
        }

        /* Bottom edge triangles */
        .triangle-11 { 
            bottom: 8%; 
            left: 12%; 
            width: 0; 
            height: 0; 
            border-left: 46px solid transparent; 
            border-right: 46px solid transparent; 
            border-bottom: 78px solid rgba(251, 191, 36, 0.5);
            transform: rotate(30deg);
            animation-delay: 4.5s;
        }

        .triangle-12 { 
            bottom: 5%; 
            left: 30%; 
            width: 0; 
            height: 0; 
            border-left: 36px solid transparent; 
            border-right: 36px solid transparent; 
            border-bottom: 62px solid rgba(173, 71, 34, 0.5);
            transform: rotate(-35deg);
            animation-delay: 5.5s;
        }

        .triangle-13 { 
            bottom: 10%; 
            right: 20%; 
            width: 0; 
            height: 0; 
            border-left: 44px solid transparent; 
            border-right: 44px solid transparent; 
            border-bottom: 75px solid rgba(239, 132, 132, 0.5);
            transform: rotate(40deg);
            animation-delay: 6.5s;
        }

        .triangle-14 { 
            bottom: 3%; 
            right: 8%; 
            width: 0; 
            height: 0; 
            border-left: 58px solid transparent; 
            border-right: 58px solid transparent; 
            border-bottom: 98px solid rgba(254, 0, 0, 0.5);
            transform: rotate(-18deg);
            animation-delay: 7s;
        }

        /* Additional corner triangles for more coverage */
        .triangle-15 { 
            top: 15%; 
            left: 1%; 
            width: 0; 
            height: 0; 
            border-left: 32px solid transparent; 
            border-right: 32px solid transparent; 
            border-bottom: 55px solid rgba(146, 30, 30, 0.5);
            transform: rotate(50deg);
            animation-delay: 0.5s;
        }

        .triangle-16 { 
            bottom: 15%; 
            right: 1%; 
            width: 0; 
            height: 0; 
            border-left: 41px solid transparent; 
            border-right: 41px solid transparent; 
            border-bottom: 70px solid rgba(245, 101, 101, 0.5);
            transform: rotate(-45deg);
            animation-delay: 1.2s;
        }

        /* Mobile responsive triangles - scaled down but maintain rotations */
        @media (max-width: 768px) {
            .triangle-1 { border-left: 30px solid transparent; border-right: 30px solid transparent; border-bottom: 50px solid rgba(158, 3, 3, 0.5); }
            .triangle-2 { border-left: 22px solid transparent; border-right: 22px solid transparent; border-bottom: 38px solid rgba(147, 51, 234, 0.5); }
            .triangle-3 { border-left: 28px solid transparent; border-right: 28px solid transparent; border-bottom: 48px solid rgba(255, 62, 62, 0.5); }
            .triangle-4 { border-left: 35px solid transparent; border-right: 35px solid transparent; border-bottom: 60px solid rgba(245, 101, 101, 0.5); }
            .triangle-5 { border-left: 25px solid transparent; border-right: 25px solid transparent; border-bottom: 42px solid rgba(251, 191, 36, 0.5); }
            .triangle-6 { border-left: 32px solid transparent; border-right: 32px solid transparent; border-bottom: 55px solid rgba(247, 215, 37, 0.5); }
            .triangle-7 { border-left: 26px solid transparent; border-right: 26px solid transparent; border-bottom: 44px solid rgba(219, 49, 49, 0.5); }
            .triangle-8 { border-left: 29px solid transparent; border-right: 29px solid transparent; border-bottom: 50px solid rgba(231, 43, 43, 0.5); }
            .triangle-9 { border-left: 23px solid transparent; border-right: 23px solid transparent; border-bottom: 40px solid rgba(115, 18, 18, 0.5); }
            .triangle-10 { border-left: 31px solid transparent; border-right: 31px solid transparent; border-bottom: 53px solid rgba(245, 101, 101, 0.5); }
            .triangle-11 { border-left: 28px solid transparent; border-right: 28px solid transparent; border-bottom: 47px solid rgba(251, 191, 36, 0.5); }
            .triangle-12 { border-left: 22px solid transparent; border-right: 22px solid transparent; border-bottom: 37px solid rgba(173, 71, 34, 0.5); }
            .triangle-13 { border-left: 27px solid transparent; border-right: 27px solid transparent; border-bottom: 45px solid rgba(239, 132, 132, 0.5); }
            .triangle-14 { border-left: 34px solid transparent; border-right: 34px solid transparent; border-bottom: 58px solid rgba(254, 0, 0, 0.5); }
            .triangle-15 { border-left: 20px solid transparent; border-right: 20px solid transparent; border-bottom: 34px solid rgba(146, 30, 30, 0.5); }
            .triangle-16 { border-left: 25px solid transparent; border-right: 25px solid transparent; border-bottom: 42px solid rgba(245, 101, 101, 0.5); }
        }



        /* Animation delays for staggered entrance effects */
        .animate-delay-100 { animation-delay: 0.1s; }
        .animate-delay-200 { animation-delay: 0.2s; }
        .animate-delay-300 { animation-delay: 0.3s; }
        .animate-delay-400 { animation-delay: 0.4s; }
        .animate-delay-500 { animation-delay: 0.5s; }
        .animate-delay-600 { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <section class="relative flex items-center justify-center min-h-screen" 
         x-data="{ loaded: false, seen: false }"
         x-intersect.once.margin.0px.0px.-50%.0px="seen = true">
        
        <div x-data="{
            showTriangles() {
                const triangles = this.$el.querySelectorAll('.hero-triangle');
                triangles.forEach((t, i) => {
                // задаём delay через inline style (надёжно при сборке Tailwind)
                t.style.transition = 'opacity 200ms ease, transform 200ms ease';
                t.style.transitionDelay = `${i * 100}ms`;
                // если хочешь — можно немного сместить setTimeout, но не обязательно
                setTimeout(()=> t.classList.add('visible'), i * 100 + 10);
                });
            }
            }"
            x-init="showTriangles()"
        >
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-1"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-2"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-3"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-4"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-5"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-6 hidden sm:block"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-7"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-8"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-9 hidden sm:block"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-10"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-11"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-12"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-13"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-14"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-15"></div>
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-16"></div>
        </div>

        
        <!-- Background Image -->
        {{-- <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="{{asset('assets/images/fonmax.jpg')}}" 
                alt="Живи Христом 2025"
                x-init="
                    if ($el.complete && $el.naturalWidth) { loaded = true }
                    else { $el.addEventListener('load', () => loaded = true, { once: true }) }
                "
                class="object-cover w-full h-full transition-transform duration-[2s] will-change-transform scale-100"
                x-effect="
                    if (loaded && seen) {
                        $el.classList.remove('scale-100');
                        $el.classList.add('scale-110');
                    } else {
                        $el.classList.remove('scale-110');
                        $el.classList.add('scale-100');
                    }
                "
            >
            <!-- Dark overlay for text readability -->
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        </div> --}}

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center px-4 text-center text-red-200">
            <h1 class="mb-4 font-bold text-6xl tracking-wide transition-opacity duration-[2s] opacity-0 lg:text-8xl"
                x-effect="$el.classList.toggle('opacity-100')"
                >
                Регистрация не прошла!
            </h1>
            <p class="w-5/6 text-sm font-light tracking-wider sm:w-[600px] lg:text-base transition-opacity duration-[3s] opacity-0"
            x-effect="$el.classList.toggle('opacity-100')">
                Что-то пошло не так... Побробуйте еще раз!
            </p>
        </div>

    </section>
</body>
</html>
