<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

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
            border-bottom: 85px solid rgba(59, 130, 246, 0.5);
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
            border-bottom: 75px solid rgba(16, 185, 129, 0.5);
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
            left: 3%; 
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
            left: 2%; 
            width: 0; 
            height: 0; 
            border-left: 55px solid transparent; 
            border-right: 55px solid transparent; 
            border-bottom: 90px solid rgba(139, 92, 246, 0.5);
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
            border-bottom: 72px solid rgba(59, 130, 246, 0.5);
            transform: rotate(20deg);
            animation-delay: 6s;
        }

        /* Right edge triangles */
        .triangle-8 { 
            top: 30%; 
            right: 3%; 
            width: 0; 
            height: 0; 
            border-left: 48px solid transparent; 
            border-right: 48px solid transparent; 
            border-bottom: 82px solid rgba(147, 51, 234, 0.5);
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
            border-bottom: 65px solid rgba(16, 185, 129, 0.5);
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
            border-bottom: 62px solid rgba(139, 92, 246, 0.5);
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
            border-bottom: 75px solid rgba(59, 130, 246, 0.5);
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
            border-bottom: 98px solid rgba(147, 51, 234, 0.5);
            transform: rotate(-18deg);
            animation-delay: 7s;
        }

        /* Additional corner triangles for more coverage */
        .triangle-15 { 
            top: 15%; 
            left: 3%; 
            width: 0; 
            height: 0; 
            border-left: 32px solid transparent; 
            border-right: 32px solid transparent; 
            border-bottom: 55px solid rgba(16, 185, 129, 0.5);
            transform: rotate(50deg);
            animation-delay: 0.5s;
        }

        .triangle-16 { 
            bottom: 15%; 
            right: 3%; 
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
            .triangle-1 { border-left: 30px solid transparent; border-right: 30px solid transparent; border-bottom: 50px solid rgba(59, 130, 246, 0.5); }
            .triangle-2 { border-left: 22px solid transparent; border-right: 22px solid transparent; border-bottom: 38px solid rgba(147, 51, 234, 0.5); }
            .triangle-3 { border-left: 28px solid transparent; border-right: 28px solid transparent; border-bottom: 48px solid rgba(16, 185, 129, 0.5); }
            .triangle-4 { border-left: 35px solid transparent; border-right: 35px solid transparent; border-bottom: 60px solid rgba(245, 101, 101, 0.5); }
            .triangle-5 { border-left: 25px solid transparent; border-right: 25px solid transparent; border-bottom: 42px solid rgba(251, 191, 36, 0.5); }
            .triangle-6 { border-left: 32px solid transparent; border-right: 32px solid transparent; border-bottom: 55px solid rgba(139, 92, 246, 0.5); }
            .triangle-7 { border-left: 26px solid transparent; border-right: 26px solid transparent; border-bottom: 44px solid rgba(59, 130, 246, 0.5); }
            .triangle-8 { border-left: 29px solid transparent; border-right: 29px solid transparent; border-bottom: 50px solid rgba(147, 51, 234, 0.5); }
            .triangle-9 { border-left: 23px solid transparent; border-right: 23px solid transparent; border-bottom: 40px solid rgba(16, 185, 129, 0.5); }
            .triangle-10 { border-left: 31px solid transparent; border-right: 31px solid transparent; border-bottom: 53px solid rgba(245, 101, 101, 0.5); }
            .triangle-11 { border-left: 28px solid transparent; border-right: 28px solid transparent; border-bottom: 47px solid rgba(251, 191, 36, 0.5); }
            .triangle-12 { border-left: 22px solid transparent; border-right: 22px solid transparent; border-bottom: 37px solid rgba(139, 92, 246, 0.5); }
            .triangle-13 { border-left: 27px solid transparent; border-right: 27px solid transparent; border-bottom: 45px solid rgba(59, 130, 246, 0.5); }
            .triangle-14 { border-left: 34px solid transparent; border-right: 34px solid transparent; border-bottom: 58px solid rgba(147, 51, 234, 0.5); }
            .triangle-15 { border-left: 20px solid transparent; border-right: 20px solid transparent; border-bottom: 34px solid rgba(16, 185, 129, 0.5); }
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
    <style>
        
    </style>
</head>
<body class="text-gray-900 bg-white">

    <div id="toast-container" class="fixed top-4 right-4 sm:right-4 sm:left-auto left-1/2 -translate-x-1/2 sm:translate-x-0 space-y-3 z-50 w-[90%] sm:w-80"></div>
     {{-- Hero Section  --}}
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
            <div class="hero-triangle transition-opacity duration-[1s] opacity-0 triangle-8 hidden sm:block"></div>
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
        <div class="relative z-10 flex flex-col items-center justify-center px-4 text-center text-white">
            <h1 class="mb-4 font-bold text-6xl leading-tight tracking-wide transition-opacity duration-[2s] opacity-0 lg:text-8xl"
                x-effect="$el.classList.toggle('opacity-100')"
                >
                Живи Христом 2025
            </h1>
            <p class="w-5/6 text-lg font-light tracking-wider lg:text-2xl transition-opacity duration-[3s] opacity-0 whitespace-nowrap"
            x-effect="$el.classList.toggle('opacity-100')">
                "ВЫСЛУШАЕМ СУЩНОСТЬ ВСЕГО"
            </p>
            <p class="w-5/6 mt-10 text-sm font-light tracking-wider lg:text-xl transition-opacity duration-[3s] opacity-0"
            x-effect="$el.classList.toggle('opacity-100')">
                31 ОКТЯБРЯ - 2 НОЯБРЯ
            </p>
        </div>

    </section>
    {{-- <section class="relative flex items-center justify-center min-h-screen px-4 py-32 overflow-hidden text-center">
        <!-- Background image with enhanced overlay for better text visibility -->
        <div class="absolute inset-0 bg-[url('/placeholder.svg?height=1080&width=1920')] bg-cover bg-center bg-no-repeat"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/85 via-purple-900/80 to-indigo-900/85"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/40"></div>
        
        <!-- Many large prominent triangular decorative elements with random rotations positioned around all edges -->
        
        
        <!-- Content with enhanced text visibility and contrast -->
        <div class="relative z-10 max-w-6xl mx-auto">
            <!-- Large hero logo with enhanced styling -->
            <div class="flex items-center justify-center mx-auto mb-12 border-4 rounded-full shadow-2xl w-80 h-80 bg-gradient-to-br from-blue-400 via-purple-500 to-blue-600 animate-fade-in border-white/30 backdrop-blur-sm">
                <div class="text-6xl font-bold text-white drop-shadow-2xl">FC</div>
            </div>
            
            <!-- Enhanced text with stronger shadows and better contrast for visibility -->
            <h1 class="mb-8 text-6xl font-bold text-white md:text-8xl animate-slide-up animate-delay-200 drop-shadow-2xl text-shadow-lg">
                Faith Conference 2024
            </h1>
            <p class="max-w-4xl mx-auto text-2xl font-medium leading-relaxed md:text-3xl text-white/95 animate-slide-up animate-delay-400 drop-shadow-xl text-shadow-md">
                Join us for three transformative days of worship, fellowship, and spiritual growth in the heart of our community.
            </p>
            
            <!-- Call to action button with enhanced visibility -->
            <div class="mt-12 animate-slide-up animate-delay-600">
                <a href="#registration" class="inline-block px-8 py-4 text-lg font-bold text-gray-900 transition-all duration-300 transform bg-white border-2 rounded-full shadow-2xl hover:bg-gray-100 hover:shadow-3xl hover:scale-105 border-white/20">
                    Register Now
                </a>
            </div>
        </div>
    </section> --}}





     {{-- Speakers Section  --}}
    <section class="px-4 py-16 text-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center">
            Спикеры конференции
            </h2>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-1">

            <div class="flex flex-col items-center text-center transition-opacity duration-700 opacity-0 speaker">
                <div class="w-32 h-32 mx-auto mb-4 bg-center bg-cover rounded-full" 
                    style="background-image: url('assets/images/conference/spikers/Тиссон.jpg')"></div>
                <h3 class="mb-2 text-xl font-semibold">Франц Гергардович Тиссен</h3>
                <p class="lg:w-[300px] italic">"Экс-председатель Союза церквей евангельских христиан-баптистов Казахстана, родом из Караганды. С 1980 года служил пресвитером. Более 40 лет занимается духовным наставничеством, обучением и поддержкой христианских общин в Казахстане и за его пределами"</p>
            </div>

            <div class="hidden text-center transition-opacity duration-700 opacity-0 speaker">
                <div class="w-32 h-32 mx-auto mb-4 bg-center bg-cover rounded-full" 
                    style="background-image: url('https://via.placeholder.com/150')"></div>
                <h3 class="mb-2 text-xl font-semibold">Sarah Miller</h3>
                <p>Youth leader and author focused on building strong faith foundations.</p>
            </div>

            <div class="hidden text-center transition-opacity duration-700 opacity-0 speaker">
                <div class="w-32 h-32 mx-auto mb-4 bg-center bg-cover rounded-full" 
                    style="background-image: url('https://via.placeholder.com/150')"></div>
                <h3 class="mb-2 text-xl font-semibold">Michael Johnson</h3>
                <p>Worship leader and musician bringing hearts together through praise.</p>
            </div>

            </div>
        </div>
    </section>

     {{-- Schedule Section  --}}
    <section 
        class="px-4 py-16 backdrop-blur-sm" 
        x-data="scheduleTabs()" 
        x-init="init()"
    >
        <div class="max-w-5xl mx-auto">
            <!-- Заголовок -->
            <h2 
                class="mb-12 text-4xl font-bold text-center transition duration-700 text-gray-50"
                :class="headerVisible ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-6'"
            >
                Расписание конференции
            </h2>
            
            <!-- Tabs -->
            <div 
                class="flex justify-center mb-8 transition duration-700"
                :class="headerVisible ? 'opacity-100 translate-y-0 delay-200' : 'opacity-0 translate-y-6'"
            >
                <div class="flex p-1 bg-gray-100 rounded-lg shadow-inner">
                    <template x-for="(day, index) in days" :key="day.id">
                        <button 
                            @click="setDay(day.id)"
                            class="px-6 py-2 font-medium transition-all duration-200 rounded-md"
                            :class="activeDay === day.id 
                                ? 'bg-confprimary text-white shadow' 
                                : 'text-gray-600 hover:text-gray-900'"
                            x-text="day.label"
                        ></button>
                    </template>
                </div>
            </div>

            <!-- Расписание -->
            <template x-for="(day, dIndex) in days" :key="day.id">
                <div x-show="activeDay === day.id" class="schedule-day">
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                        <template x-for="(event, index) in day.events" :key="index">
                            <div 
                                class="p-4 transition duration-500 transform bg-white border-l-4 rounded-lg shadow-sm border-confprimary hover:shadow-md"
                                :class="animate 
                                    ? 'opacity-100 translate-y-0' 
                                    : 'opacity-0 translate-y-6'"
                                :style="`transition-delay: ${index * 120}ms`"
                            >
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-sm font-semibold text-gray-900" x-text="event.title"></h3>
                                        <p class="text-xs text-gray-600" x-text="event.subtitle"></p>
                                    </div>
                                    <span class="text-sm font-medium text-confprimary" x-text="event.time"></span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>
        </div>
    </section>

    <section class="px-4 py-16 text-gray-50 mb-5">
        <div class="max-w-6xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center">
                Пожертвование на конференцию
            </h2>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-4 lg:grid-cols-4">

                <div class="text-center transition-opacity duration-700">
                    <h3 class="mb-2 text-2xl font-semibold">1000 рублей</h3>
                    <p>При присутсвии на одном дне конференции</p>
                </div>
                <div class="flex flex-col items-center text-center transition-opacity duration-700">
                    <h3 class="mb-2 text-2xl font-semibold">2000 рублей</h3>
                    <p class="lg:w-[300px]">Регистрация, проживание, питание. Если вы зарегистрировались до 20 октября.</p>
                </div>
                <div class="text-center transition-opacity duration-700">
                    <h3 class="mb-2 text-2xl font-semibold">2500 рублей</h3>
                    <p>В случае, если вы зарегистрировались после 20 октября. Сюда также входит регистрация, проживание и питание.</p>
                </div>
                <div class="text-center transition-opacity duration-700">
                    <h3 class="mb-2 text-2xl font-semibold">3000 рублей</h3>
                    <p>В том случае, если вы не зарегистрировались</p>
                </div>

            </div>
        </div>
    </section>

     {{-- Registration Form Section  --}}
    {{-- <section class="px-4 py-16 bg-gray-200">
        <div class="max-w-2xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center text-gray-500">Регистрация закрыта</h2> --}}
            
             {{-- Registration Form Card  --}}
            {{-- <div class="p-8 bg-gray-100 shadow-lg rounded-xl">
                 {{-- Progress Bar  --}}
                {{-- <div class="mb-8">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-400">Шаг <span id="current-step">1</span> из 13</span>
                        <span class="text-sm font-medium text-gray-400"><span id="progress-percent">8</span>%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-300 rounded-full">
                        <div id="progress-bar" class="h-2 transition-all duration-300 rounded-full bg-gray-400" style="width: 25%"></div>
                    </div>
                </div>

                <form id="registration-form"> --}}
                     {{-- Step 1: Full Name  --}}
                    

                    {{-- <div id="step-1" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-gray-400">
                                <span class="text-3xl text-white material-icons">person</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-500">Персональная информация</h3>
                            <p class="mt-2 text-gray-400">Введите вашу фамилию</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label for="surname" class="block mb-2 text-sm font-medium text-gray-400">Ваша Фамилия</label>
                                <input type="text" id="surname" name="surname" disabled
                                       class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:border-transparent"
                                       placeholder="Иванов">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between gap-2 mt-8">
                        <!-- Back кнопка -->
                        <button type="button" id="prev-btn" disabled
                                class="flex items-center justify-center hidden w-12 h-12 text-gray-400 border border-gray-300 rounded-full bg-gray-200">
                            <span class="material-icons">arrow_back</span>
                        </button>

                        <div class="flex-1"></div>

                        <!-- Next кнопка -->
                        <button type="button" id="next-btn" disabled
                                class="flex items-center justify-center w-12 h-12 text-gray-400 rounded-full bg-gray-300">
                            <span class="material-icons">arrow_forward</span>
                        </button>

                        <!-- Submit кнопка -->
                        <button type="submit" id="submit-btn" disabled
                                class="flex items-center justify-center hidden w-12 h-12 text-gray-400 rounded-full bg-gray-300">
                            <span class="material-icons">check</span>
                        </button>
                    </div>
                </form> --}}
{{-- 
                <p class="mt-8 text-center text-sm text-gray-500">Зарегистрироваться можно будет теперь только на месте проведения мероприятия.</p>
            </div>
        </div>
    </section> --}}

     {{-- Footer  --}}
    <footer class="px-4 py-8 text-white bg-gray-900">
        <div class="flex items-center justify-center max-w-4xl gap-6 mx-auto text-center">
            
            <!-- Telegram -->
            <a href="https://t.me/livebyChrist" target="_blank" class="flex items-center justify-start transition-colors hover:text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 32 32" fill="none">
                    <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)"/>
                    <path d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z" fill="white"/>
                    <defs>
                        <linearGradient id="paint0_linear_87_7225" x1="16" y1="2" x2="16" y2="30" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#37BBFE"/>
                            <stop offset="1" stop-color="#007DBB"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span class="ml-1 text-xs">Telegram</span>
            </a>

            <!-- Map -->
            <a href="https://yandex.ru/maps/-/CLU~4K-j" target="_blank" class="flex items-center justify-start transition-colors hover:text-red-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 -mt-0.5" fill="#E32636" viewBox="0 0 24 24">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
                </svg>
                <span class="text-xs">Место проведения</span>
            </a>

            <!-- Phone -->
            <a href="tel:+79532791763" class="flex items-center justify-start align-baseline transition-colors hover:text-yellow-400">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.11-.27 11.72 11.72 0 0 0 3.7.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C9.16 21 3 14.84 3 7a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.3.2 2.58.59 3.7a1 1 0 0 1-.27 1.11l-2.2 2.2z"/>
                </svg> --}}
                <span class="text-xs">+79532791763</span>
            </a>

        </div>
        </footer>
    
    <script>
        // Schedule functionality
        function showDay(day) {
            // Hide all schedule days
            document.querySelectorAll('.schedule-day').forEach(el => el.classList.add('hidden'));
            
            // Show selected day
            document.getElementById(`day${day}-schedule`).classList.remove('hidden');
            
            // Update button styles
            document.querySelectorAll('[id$="-btn"]').forEach(btn => {
                btn.classList.remove('bg-confprimary', 'text-white');
                btn.classList.add('text-gray-600', 'hover:text-gray-900');
            });
            
            document.getElementById(`day${day}-btn`).classList.add('bg-confprimary', 'text-white');
            document.getElementById(`day${day}-btn`).classList.remove('text-gray-600', 'hover:text-gray-900');
        }

        // Registration form functionality
        
    </script>
    <script>
       function scrollTrigger() {
            return {
                show: false,
                init() {
                    const section = document.querySelector("section");
                    const onScroll = () => {
                        const rect = section.getBoundingClientRect();
                        const triggerPoint = window.innerHeight * 0.6; // 40% экрана
                        if (rect.top < triggerPoint) {
                            this.show = true;
                            window.removeEventListener("scroll", onScroll);
                        }
                    };
                    window.addEventListener("scroll", onScroll);
                }
            }
        }
        
        function scheduleTabs() {
            return {
                headerVisible: false,
                animate: false,
                activeDay: 1,
                days: [
                    {
                        id: 1,
                        label: "31",
                        events: [
                            { title: "Регистрация", subtitle: "Кофе-брейк, общение", time: "16:00" },
                            { title: "Сессия 1 - Открытие", subtitle: "Участие молодёжного хора и оркестра Церкви Брянск-1", time: "18:00" },
                            { title: "Свободное время", subtitle: "кофе брейк/время для знакомства, общения", time: "20:00" },
                            // { title: "Lunch Break", subtitle: "Community meal", time: "12:30 PM" },
                        ]
                    },
                    {
                        id: 2,
                        label: "1",
                        events: [
                            { title: "Утреннее общение", subtitle: "За чашечкой кофе", time: "9:00" },
                            { title: "Сессия 2", subtitle: 'Проповедь "Бойся Бога"', time: "10:00" },
                            { title: "Общение", subtitle: "Кофе-брейк", time: "11:30" },
                            { title: "Семинары", subtitle: "По определенным темам", time: "12:00" },
                            { title: "Обед", subtitle: "", time: "13:00" },
                            { title: "Круглый стол", subtitle: "Ответы на ваши вопросы", time: "14:30" },
                            { title: "Общение", subtitle: "Кофе-брейк", time: "16:00" },
                            { title: "Сессия 3", subtitle: 'Проповедь "Место Божьего Слова в моей жизни"', time: "17:00" },
                            { title: "Общение", subtitle: "Кофе-брейк, настолки, спортивные мероприятия(волейбол, каток)", time: "19:00" },
                        ]
                    },
                    {
                        id: 3,
                        label: "2",
                        events: [
                            { title: "Посещение местных церквей", subtitle: "В этот день у всех присутствующих на конференции будет возможность посетить поместные Церкви и поучавствовать в Заповеди Господней.", time: "" },
                            { title: "Обед", subtitle: 'С молодёжью поместной церкви', time: "12:00" },
                            { title: "Выезд в город", subtitle: "Совместный выезд в город / прогулка по городу", time: "14:00" },
                            { title: "Сессия 4", subtitle: "Закрытыие конференции", time: "17:00" },
                            { title: "Ужин", subtitle: "Разъезд участников конференции", time: "19:00" },
                        ]
                    }
                ],

                init() {
                    const section = this.$el;

                    const checkScroll = () => {
                        const sectionTop = section.getBoundingClientRect().top;
                        const triggerPoint = window.innerHeight * 0.5; // верх секции пересек 40% окна
                        if (sectionTop < triggerPoint && !this.headerVisible) {
                            this.headerVisible = true;
                            this.startAnimation();
                            window.removeEventListener('scroll', checkScroll);
                            window.removeEventListener('resize', checkScroll);
                        }
                    };

                    window.addEventListener('scroll', checkScroll, { passive: true });
                    window.addEventListener('resize', checkScroll);

                    // проверяем сразу при загрузке страницы
                    checkScroll();
                },

                startAnimation() {
                    this.animate = false;
                    setTimeout(() => this.animate = true, 50);
                },

                setDay(id) {
                    this.activeDay = id;
                    this.startAnimation();
                }
            }
        }
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // оставляем только цифры

            // Если первая цифра — 8 или 7, заменяем на +7
            if (value.startsWith('8')) {
                value = '7' + value.slice(1);
            } else if (!value.startsWith('7')) {
                value = '7' + value;
            }

            // Ограничиваем до 11 цифр
            value = value.slice(0, 11);

            // Форматируем как +7XXXXXXXXXX
            e.target.value = '+' + value;
        });
        

    </script>
    <script>
        function showToast(message, type = "info") {
            const container = document.getElementById("toast-container");
            const toast = document.createElement("div");

            const styles = {
                success: "bg-green-500",
                error: "bg-red-500",
                info: "bg-blue-500",
            };

            toast.className = `
                flex items-center px-4 py-3 rounded-lg shadow-lg text-white 
                ${styles[type]} opacity-0 translate-y-2 transition-all duration-500 ease-out
            `;

            // Иконка + текст
            toast.innerHTML = `
                <span class="mr-2">
                    ${type === "success" ? "✅" : type === "error" ? "❌" : "ℹ️"}
                </span>
                <span class="flex-1">${message}</span>
            `;

            container.appendChild(toast);

            // Плавное появление
            setTimeout(() => {
                toast.classList.remove("opacity-0", "translate-y-2");
                toast.classList.add("opacity-100", "translate-y-0");
            }, 50);

            // Плавное исчезновение и удаление
            setTimeout(() => {
                toast.classList.remove("opacity-100", "translate-y-0");
                toast.classList.add("opacity-0", "translate-y-2");
                setTimeout(() => toast.remove(), 500);
            }, 5000);
        }

    </script>
    <script>
        const speakers = document.querySelectorAll('.speaker');

        function checkVisibility() {
            const triggerPoint = window.innerHeight * 0.5; // половина экрана

            speakers.forEach(el => {
            const rect = el.getBoundingClientRect();
            if(rect.top <= triggerPoint) {
                el.style.opacity = 1; // делаем видимым
            }
            });
        }

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('load', checkVisibility);
    </script>
    @if ($errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                @foreach ($errors->all() as $error)
                    showToast("{{ $error }}", "error");
                @endforeach
            });
        </script>
    @endif
</body>
</html>
