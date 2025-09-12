<x-main-layout>
<div class="relative z-20 min-h-screen flex justify-center items-center">
    <!-- 3. Блок с фиксированным фоном внутри контента -->
    <div 
                class="absolute inset-0 bg-cover bg-center bg-fixed bg-[url('/public/assets/images/fon1.jpg')] md:bg-[url(/public/assets/images/fon1max.jpg)]"
            ></div>
    {{-- <div 
        class="min-h-[500px] bg-cover bg-center bg-no-repeat bg-fixed bg-[url('/public/assets/images/fon1.jpg')] rounded-t-3xl shadow-xl"
    ></div> --}}
    <div class="absolute inset-0 -mt-4 bg-gradient-to-b from-black from-0% via-black/75 via-100% to-transparent to-100%"></div>
    <div class="relative z-10 text-white flex items-center align-baseline justify-center">
        <div class="w-11/12 h-full p-6 flex justify-center flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="240px" viewBox="0 -960 960 960" width="240px" fill="#43cc61"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
            <h2 class="text-2xl text-center w-full sm:text-3xl lg:text-5xl text-[#43cc61]">Вы успешно зарегестрировались!</h2>
            <p class="sm:text-base text-sm text-center mt-8 w-full">Вы успешно зарегестрировались в подростковую смену Бытошь! <b>На вашу почту вам придет письмо</b>, с данными о регистрации. Не забудте взять одежду(на встречи, игры, купания, и свободное время), средства личной гигиены, постельное белье(наволочку, простыню и пододеяльник), Библию(она вам пригодится), а также деньги для прохождения регистрации в размере 6000 рублей. Ждем вас на подростковой смене в Бытоше!</p>                            
        </div>
    </div>
</div>
    
</x-main-layout>