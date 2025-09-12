
<x-main-layout>
    <div id="header-image" class="fixed top-0 left-0 w-full h-[60vh] z-10 md:h-[100vh]">
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

    <div class="relative z-20 mt-[59vh] md:mt-[100vh] min-h-screen">
    <!-- 3. Блок с фиксированным фоном внутри контента -->
        <div class="absolute inset-0 bg-cover bg-center bg-fixed bg-[url('/public/assets/images/fon1.jpg')] md:bg-[url(/public/assets/images/fon1max.jpg)]"></div>
    {{-- <div 
        class="min-h-[500px] bg-cover bg-center bg-no-repeat bg-fixed bg-[url('/public/assets/images/fon1.jpg')] rounded-t-3xl shadow-xl"
    ></div> --}}
        <div class="absolute inset-0 -mt-4 bg-gradient-to-b from-black from-0% via-black/75 via-100% to-transparent to-100%"></div>
        {{-- <x-input-error messages='sdfsdfsd sdfsd' class="w-5/6 lg:w-4/6 mx-auto"></x-input-error> --}}
        <div class="relative h-full w-full flex items-center align-baseline justify-center">        
            <div class="w-full h-full bg-[rgb(20,20,20)] bg-opacity-0 text-white">
                @if ($errors->any())
                <x-input-error :messages="$errors->all()" class="w-5/6 lg:w-4/6 mx-auto"></x-input-error>
            @endif
                <h2 class="w-5/6 lg:w-4/6 mx-auto text-5xl sm:text-3xl lg:text-4xl my-8 md:my-10">Молодость не черновик. Регистрация</h2>
                <form class="w-5/6 lg:w-4/6 mx-auto" method="POST" action="{{route('form')}}">       
                    @csrf   
                    <div class="mb-5">
                        <label for="surname" class="block mb-2 text-lg font-medium">Ваша фамилия:</label>
                        <input type="text" name="surname" placeholder="Фамилия" id="surname" value="{{ old('surname') }}" maxlength="50" class="form-input shadow-xs rounded-lg border  bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 text-lg block w-full p-2.5" required />
                    </div>      
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-lg font-medium">Ваше имя:</label>
                        <input type="text" name="name" placeholder="Имя" id="name" value="{{ old('name') }}" maxlength="50" class="form-input shadow-xs text-lg rounded-lg border bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    <div class="mb-5">
                        <label for="patronymic" class="block mb-2 text-lg font-medium">Ваше отчество:</label>
                        <input type="text" name="patronymic" placeholder="Отчество" id="patronymic" value="{{ old('patronymic') }}" maxlength="50" class="form-input shadow-xs rounded-lg border bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 text-lg block w-full p-2.5"/>
                    </div>
                    <div class="mb-5">
                        <label for="email-address-icon" class="block mb-2 text-lg font-medium">Ваш email:</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                </svg>
                            </div>
                            <input type="text" name="email" id="email-address-icon" value="{{ old('email') }}" maxlength="255" class="form-input rounded-lg border bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 text-lg block w-full ps-10 p-2.5" placeholder="name@flowbite.com" required>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="text-lg font-medium">Ваш телефон:</label>
                        <div class="flex items-center mt-2">
                            <div id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-lg font-medium text-center border bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 rounded-s-lg hover:bg-gray-800" type="button">
                                <svg width="28px" height="20px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet"><path fill="#CE2028" d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4v-4h36v4z"></path><path fill="#22408C" d="M0 13h36v10H0z"></path><path fill="#EEE" d="M32 5H4a4 4 0 0 0-4 4v4h36V9a4 4 0 0 0-4-4z"></path></svg>
                                <span class="text-gray-300">+7</span>
                            </div>
                            <div class="relative w-full">
                                <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="block p-2.5 w-full z-20 text-lg rounded-e-lg border-s-0 border bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="1234567890" maxlength="10" required />
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="church" class="block mb-2 text-lg font-medium">Ваша поместная церковь:</label>
                        <input type="text" name="church" value="{{ old('church') }}" maxlength="255" placeholder="ЕХБ Первый Брянск" id="church" class="form-input shadow-xs text-lg rounded-lg border  bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    
                    <div class="mb-5">
                        <label for="pol" class="block mb-2 text-lg font-medium">Ваш пол:</label>
                        <select id="pol" name="pol" class="border text-lg rounded-lg bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="man">Мальчик</option>
                            <option value="woman">Девочка</option>
                        </select>
                    </div>

                    <div class="mb-10">
                        <label for="dateBird" class="block mb-2 text-lg font-medium">Ваша дата рождения:</label>

                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                            </div>
                            <input name="dateBird" pattern="\d{2}\.\d{2}\.\d{4}" value="{{ old('dateBird') }}" id="dateBird" type="text" class="form-input border text-lg rounded-lg forounded-lg bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Дата рождения" required>
                        </div>
                    </div>

                    {{-- <div class="flex justify-start mb-5 flex-wrap">
                        <div class="flex items-start mb-5 mr-6">
                            <div class="flex items-center h-5">
                                <input id="helper-radio-1" required name='diseases' aria-describedby="helper-radio-text" type="radio" value="false" class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-900 border-gray-600">
                            </div>
                            <div class="ms-2 text-lg">
                                <label for="helper-radio-1" class="font-medium">Я подтверждаю что у меня нет никаких заболеваний</label>
                                <p id="helper-radio-text" class="text-xs font-normal text-gray-300">Физических, психических или другие</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="helper-radio-2" required name='diseases' aria-describedby="helper-radio-text" type="radio" value="true" class="w-4 h-4 text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-900 border-gray-600">
                            </div>
                            <div class="ms-2 text-lg">
                                <label for="helper-radio-2" class="font-medium">У меня все же есть заболевания</label>
                                <p id="helper-radio-text" class="text-xs font-normal text-gray-300">Физические, психические или какие-либо другие</p>
                            </div>
                        </div>
                    </div> --}}
                    <div id="disease-details" class="mb-4">
                        <label for="disease-description" class="block mb-2 text-lg font-medium">
                            Если у тебя есть какие-то особенности здоровья (например, аллергии, хронические заболевания, ограничения в активности или что-то ещё), которые нужно учесть — напиши об этом здесь:
                        </label>
                        <textarea id="disease-description" name="disease_description" rows="4"
                                class="block p-2.5 w-full text-lg  rounded-lg border  bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Напиши..."></textarea>
                    </div>

                    <div id="terms-block-1" class="items-start mb-5 mt-12 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-1" name="check1" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-1" class="ms-2 text-lg font-medium"><span class="text-red-600">Я согласен</span>, что буду находится <span class="text-red-600">на территории базы <span class="text-red-600 font-bold">без телефона.</span></span> Более побробнее об этом правиле <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>

                    <div id="terms-block-2" class="items-start mb-5 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-2" name="check2" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-2" class="ms-2 text-lg font-medium"><span class="text-red-600">Я согласен</span>, что <span class="text-red-600">буду cоблюдать нормы приличного внешнего вида</span>. Более побробнее об этом правиле <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>

                    <div id="terms-block-3" class="items-start mb-5 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-3" name="check2" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-3" class="ms-2 text-lg font-medium"><span class="text-red-600">Я не буду купаться один</span>, а только в присутствии наставника. Более побробнее об этих правилах <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>
    {{-- начало --}}
                    <div id="terms-block-4" class="items-start mb-5 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-4" name="check2" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-4" class="ms-2 text-lg font-medium"><span class="text-red-600">Я не буду один кататься на лодке</span>, а только в присутствии наставника. Более побробнее об этих правилах <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>
                    <div id="terms-block-5" class="items-start mb-5 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-5" name="check2" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-5" class="ms-2 text-lg font-medium"><span class="text-red-600">Я не буду находиться в помещениях для отдыха противоположного пола</span>. Более побробнее об этих правилах <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>
                    <div id="terms-block-6" class="items-start mb-5 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-6" name="check2" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-6" class="ms-2 text-lg font-medium"><span class="text-red-600">Я не буду самовольно покидать территорию выезда</span>. Более побробнее об этих правилах <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>
                    <div id="terms-block-7" class="items-start mb-5 hidden">
                        <div class="flex items-center h-5">
                        <input id="terms-7" name="check2" type="checkbox" value={{true}} class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                        </div>
                        <label for="terms-7" class="ms-2 text-lg font-medium">В случае не исполнения этих правил - <span class="text-red-600">я согласен понести должные наказание</span> - вплоть до <span class="text-red-600">аннулирования путевки</span> без возврата денежных средств, и изгнания из территории выезда. Более побробнее об этих правилах <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">смотри здесь</a></label>
                    </div>
                    
    {{-- конец --}}

                    <div id="terms-block-8" class="flex-col hidden">
                        <!-- Видео на всю ширину -->
                        {{-- <div class="w-full mb-4">
                            <video class="w-full max-w-full h-auto" id="video-1" controls>
                                <source src="{{ asset('assets/videos/Видево.mp4') }}" type="video/mp4">
                                Видео не загрузилось...
                            </video>
                        </div> --}}

                        <!-- Чекбокс и текст под видео -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms-8" name="check3" type="checkbox" value="true" class="w-4 h-4 border bg-gray-700 border-gray-600 rounded-sm focus:ring-blue-500 focus:border-blue-500" required />
                            </div>
                            <label for="terms-8" class="ms-2 text-lg font-medium">
                                И вообще я согласен со <a href="{{ route('reglaments', ['key' => env('PAGE_KEY')]) }}" class="text-blue-600 hover:underline">всеми правилами выезда</a> изложенными в открытом доступе на сайте регистрации.
                            </label>
                        </div>
                    </div>

                    <div class="my-10">
                        <button type="submit" id="button-reg" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 hidden">Зарегистрироваться</button>
                        <button type="button" id="button-terms" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">Зарегистрироваться</button>
                        <button type="button" id="clear-button" class="py-2.5 px-5 me-2 mb-2 text-lg font-medium focus:outline-none rounded-lg border  bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">Сбросить</button>        
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>
<script>
    document.getElementById('dateBird').addEventListener('input', function(e) {
        // Удаляем все точки (чтобы избежать дублирования)
        let value = e.target.value.replace(/\./g, '');
        
        // Добавляем точки после 2-й и 4-й цифры
        if (value.length > 4) {
            value = value.substring(0, 2) + '.' + value.substring(2, 4) + '.' + value.substring(4, 8);
        } else if (value.length > 2) {
            value = value.substring(0, 2) + '.' + value.substring(2, 4);
        }
        
        // Обновляем значение в поле ввода
        e.target.value = value;
    });
</script>



<script>
    const formInputs = document.querySelectorAll('.form-input');
    const clearButton = document.getElementById('clear-button');
    const buttonTerms = document.getElementById('button-terms');
    const buttonReg = document.getElementById('button-reg');


    const termsBlock1 = document.getElementById('terms-block-1');
    const termsBlock2 = document.getElementById('terms-block-2');
    const termsBlock3 = document.getElementById('terms-block-3');
    const termsBlock4 = document.getElementById('terms-block-4');
    const termsBlock5 = document.getElementById('terms-block-5');
    const termsBlock6 = document.getElementById('terms-block-6');
    const termsBlock7 = document.getElementById('terms-block-7');
    const termsBlock8 = document.getElementById('terms-block-8');

    const terms1 = document.getElementById('terms-1');
    const terms2 = document.getElementById('terms-2');
    const terms3 = document.getElementById('terms-3');
    const terms4 = document.getElementById('terms-4');
    const terms5 = document.getElementById('terms-5');
    const terms6 = document.getElementById('terms-6');
    const terms7 = document.getElementById('terms-7');
    const terms8 = document.getElementById('terms-8');

    // const video1 = document.getElementById('video-1');
    // console.log(buttonTerms);
    

    let buttonTermsCount = 0;
    
    clearButton.addEventListener('click', ()=>{
        formInputs.forEach((input, key) => {
            input.value = '';
        })
    })

    buttonTerms.addEventListener('click', async()=>{
        
        switch (buttonTermsCount) {
            case 0:
                termsBlock1.classList.remove('hidden');
                termsBlock1.classList.add('flex');
                buttonTermsCount += 1
                break;
            case 1:
                if (terms1.checked) {
                    termsBlock2.classList.remove('hidden');
                    termsBlock2.classList.add('flex');
                    buttonTermsCount += 1
                }
                break;
            case 2:
                if (terms2.checked) {
                    termsBlock3.classList.remove('hidden');
                    termsBlock3.classList.add('flex');
                    buttonTermsCount += 1
                }
                break;
            case 3:
                if (terms3.checked) {
                    termsBlock4.classList.remove('hidden');
                    termsBlock4.classList.add('flex');
                    buttonTermsCount += 1
                }
                break;
            case 4:
                if (terms4.checked) {
                    termsBlock5.classList.remove('hidden');
                    termsBlock5.classList.add('flex');
                    buttonTermsCount += 1
                }
                break;
            case 5:
                if (terms5.checked) {
                    termsBlock6.classList.remove('hidden');
                    termsBlock6.classList.add('flex');
                    buttonTermsCount += 1
                }
                break;
            case 6:
                if (terms6.checked) {
                    termsBlock7.classList.remove('hidden');
                    termsBlock7.classList.add('flex');
                    buttonTermsCount += 1
                }
                break;
            case 7:
                if (terms7.checked) {
                    termsBlock8.classList.remove('hidden');
                    termsBlock8.classList.add('flex');

                    // await video1.play();

                    // if (video1.requestFullscreen) {
                    //     await video1.requestFullscreen();
                    // } else if (video1.webkitEnterFullscreen) { /* Safari */
                    //     await video1.webkitEnterFullscreen();
                    // }

                    buttonTerms.classList.add('hidden');
                    buttonReg.classList.remove('hidden');
                    buttonTermsCount += 1
                }
                break;
        
            default:
                break;
        }
        console.log(buttonTermsCount);
        
    })

    // const datepickerId = document.getElementById('datepickerId');
    // datepickerId.addEventListener('click', ()=>{

    //     document.querySelector('.datepicker').classList.remove('hidden');

    //     const datepickerGrid = document.querySelectorAll('.datepicker-grid');
    //     datepickerGrid.forEach((input, key) => {
    //         input.addEventListener('click', ()=>{
    //             document.querySelector('.datepicker').classList.add('hidden');
    //         })
    //     })

    // })

    const radios = document.querySelectorAll('input[name="diseases"]');
    const diseaseDetails = document.getElementById('disease-details');
    const diseaseDescription = document.getElementById('disease-description');

    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.value === 'true') {
                diseaseDetails.classList.remove('hidden');
                diseaseDescription.required = true;
            } else {
                diseaseDetails.classList.add('hidden');
                diseaseDescription.required = false;
            }
        });
    });
    
    
</script>