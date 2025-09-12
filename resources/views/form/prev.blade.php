<x-main-layout>

{{-- <div  class="fixed top-0 left-0 w-full h-96 bg-cover bg-center z-10 "></div> --}}
<div id="header-image" class="fixed top-0 left-0 w-full h-[70vh] z-10 md:h-[100vh]">
    <!-- Контейнер с картинкой и градиентом -->
    <div class="relative w-full h-full">
        <!-- Сама картинка -->
        <div 
            class="absolute inset-0 bg-cover bg-center bg-[url(/public/assets/images/thems.jpg)]"
        ></div>
        <!-- Градиент поверх картинки -->
        <div class="absolute inset-0 w-full bg-gradient-to-t from-black from-0% via-black/100 via-20% to-transparent to-100% mt-[30vh] md:mt-[50vh]"></div>
    </div>
</div>   
<!-- Основной контент (начинается после картинки) -->
<div class="relative z-20 md:mt-[100vh] mt-[69vh] min-h-screen">
    <!-- 3. Блок с фиксированным фоном внутри контента -->
    <div 
                class="absolute inset-0 bg-cover bg-center bg-fixed bg-[url('/public/assets/images/fon1.jpg')] md:bg-[url(/public/assets/images/fon1max.jpg)]"
            ></div>
    {{-- <div 
        class="min-h-[500px] bg-cover bg-center bg-no-repeat bg-fixed bg-[url('/public/assets/images/fon1.jpg')] rounded-t-3xl shadow-xl"
    ></div> --}}
    <div class="absolute inset-0 -mt-4 bg-gradient-to-b from-black from-0% via-black/75 via-100% to-transparent to-100%"></div>
        {{-- <div class="p-8 text-white bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold">Фон остаётся на месте</h1>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p><p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
            <p>Этот фон не двигается при скролле (как background-attachment: fixed).</p>
        </div> --}}
        <div class="relative z-10 p-8 md:p-28 text-white flex flex-col h-full justify-between min-h-screen">
            <div>
                <h1 class="text-5xl mb-5">Регистрация</h1>
                <div class="mb-20">
                    <p class="text-xl">На подростковую смену в Бытошь</p>
                    <p class="text-xl">Возраст: 14-16 лет</p>
                    <p class="text-xl">Дата: 7-14 июля</p>
                </div>
                <h1 class="text-4xl mb-5">Информация</h1>
                <div class="mb-20">
                    <p class="text-xl mb-5">Смена будет проходить в п. Бытошь, на базе по адресу ввапвапвапв.</p>
                    <p class="text-xl">Зерегистрироваться могут участники от 14 до 16 лет. Так же участники которым исполняется 14 лет в июле, или 17 лет в июле. Такие участники тоже имеют право попать на выезд.</p>
                </div>
                
            </div>
            <div class="mt-auto">
                <a href="{{route('index', ['key' => env('PAGE_KEY')])}}" class="text-white flex justify-center items-center mb-2 bg-black w-full h-16 rounded-xl border-white border-2 text-2xl">Зарегистрироваться</a>
                <a href="{{route('reglaments', ['key' => env('PAGE_KEY')])}}" class="text-white flex justify-center items-center bg-black w-full h-16 rounded-xl border-white border-2 text-2xl">Регламент</a>
            </div>
        </div>


    {{-- <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-transparent"></div> --}}
</div>

</x-main-layout>

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