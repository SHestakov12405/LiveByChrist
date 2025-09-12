
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
        <div class="w-11/12 h-full p-6 flex justify-center text-center items-center flex-col">
            <svg xmlns="http://www.w3.org/2000/svg" height="240px" class="" viewBox="0 -960 960 960" width="240px" fill="#ef4444"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
            
            @if (request()->get('info') == "age" || request()->get('info') == null)
                <h2 class="text-2xl text-center w-full sm:text-3xl lg:text-4xl text-red-500">Мы не можем вас зарегистрировать!</h2>
                <p class="sm:text-base text-sm text-center mt-8 w-full">К сожалению мы не можем вас зарегистрировать, <strong class="text-red-500">из-за вашего возраста.</strong> Ведь подростковые лагерь проводится для подростков 14-16 лет.</p>                                 
            @elseif(request()->get('info') == "reserve")
                <h2 class="text-2xl text-center w-full sm:text-3xl lg:text-4xl"><strong class=" text-red-500">Внимание! Вы в резерве</strong></h2>
                <p class="sm:text-base text-sm text-center mt-8 w-full">К сожалению места для {{request()->get('pol') == 'man' ? 'мальчиков' : 'девочек'}} закончились. <strong class="text-red-500">Мы зарегистрировали вас в резерв. Пока что вы не попадаете в смену.</strong> Что это означает? Это означает, что если кто-то из зарегистрированных ребят откажется от поездки, то мы заменим его на человека из резерва. Так что у вас все еще есть шанс попасть на смену! Если это произойдет, <strong class="text-red-500">мы вас обязательно оповестим. Если никакого оповещения не будет - то к сожалению вы не попадаете в смену, так как места законичлись.</strong> Пока что вы находитесь в резерве, и не попадаете в смену.</p>                                 
            @else
                <p class="sm:text-base text-sm text-center mt-8 w-full">К сожалению мы не можем вас зарегистрировать, из-за вашего возраста. Ведь подростковые лагерь проводится для подростков 14-16 лет.</p>                                 
            @endif
        </div>
    </div>
   </div>
</x-main-layout>