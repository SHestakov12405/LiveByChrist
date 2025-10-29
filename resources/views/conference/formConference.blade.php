<section class="px-4 py-16 bg-opacity-0">
        <div class="max-w-2xl mx-auto">
            <h2 class="mb-12 text-4xl font-bold text-center text-gray-50">Регистрация на Живи Христом 2025</h2>
            
             {{-- Registration Form Card  --}}
            <div class="p-8 bg-white shadow-lg rounded-xl">
                 {{-- Progress Bar  --}}
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-600">Шаг <span id="current-step">1</span> из 13</span>
                        <span class="text-sm font-medium text-gray-600"><span id="progress-percent">25</span>%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full">
                        <div id="progress-bar" class="h-2 transition-all duration-300 rounded-full bg-confprimary" style="width: 25%"></div>
                    </div>
                </div>

                <form id="registration-form">
                     {{-- Step 1: Full Name  --}}
                    

                    <div id="step-1" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">person</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Персональная информация</h3>
                            <p class="mt-2 text-gray-600">Введите вашу фамилию</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label for="surname" class="block mb-2 text-sm font-medium text-gray-700">Ваша Фамилия</label>
                                <input type="text" id="surname" name="surname" required 
                                       class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                       placeholder="Иванов">
                            </div>
                        </div>
                    </div>

                    <div id="step-2" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">person</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Персональная информация</h3>
                            <p class="mt-2 text-gray-600">Введите ваше имя</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Ваше Имя</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                       placeholder="Иван">
                            </div>
                        </div>
                    </div>

                    <div id="step-3" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">email</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Персональная информация</h3>
                            <p class="mt-2 text-gray-600">Введите ваш email</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Ваш Email</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                       placeholder="ivanov@mail.ru">
                            </div>
                        </div>
                    </div>

                    <div id="step-4" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">phone</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Персональная информация</h3>
                            <p class="mt-2 text-gray-600">Введите ваш номер телефона</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Ваша Номер Телефона</label>
                                <input type="text" id="phone" name="phone" required 
                                       class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                       placeholder="+71234567890">
                            </div>
                        </div>
                    </div>

                    <div id="step-5" class="hidden form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">wc</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Ваш пол</h3>
                            <p class="mt-2 text-gray-600">Пожалуйста укажите ваш пол</p>
                        </div>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="gender" value="brother" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg gender-option hover:border-confprimary">
                                        <div class="mb-2 text-2xl">👨</div>
                                        <span class="font-medium text-gray-900">Брат</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="gender" value="sister" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg gender-option hover:border-confprimary">
                                        <div class="mb-2 text-2xl">👩</div>
                                        <span class="font-medium text-gray-900">Сестра</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="step-6" class="hidden form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">schedule</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Ваш возраст</h3>
                            <p class="mt-2 text-gray-600">Пожалуйста укажите ваш возраст</p>
                        </div>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="age" value="15-17" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg age-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👨</div> --}}
                                        <span class="font-medium text-gray-900">15-17</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="age" value="18-20" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg age-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👩</div> --}}
                                        <span class="font-medium text-gray-900">18-20</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="age" value="21-25" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg age-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👨</div> --}}
                                        <span class="font-medium text-gray-900">21-25</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="age" value="26-30" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg age-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👩</div> --}}
                                        <span class="font-medium text-gray-900">26-30</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="age" value="30+" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg age-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👨</div> --}}
                                        <span class="font-medium text-gray-900">30+</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                     {{-- Step 2: Church/City  --}}
                    <div id="step-7" class="hidden form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">location_on</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Информация о проживании</h3>
                            <p class="mt-2 text-gray-600">Выбирите вышу область проживания</p>
                        </div>
                       <div class="space-y-4">
                            <div>
                                <label for="region" class="block mb-2 text-sm font-medium text-gray-700">Регион РФ</label>
                                <select id="region" name="region" required
                                        class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent">
                                    <option value="">Выберите регион</option>

                                    <!-- Республики -->
                                    <option value="adygea">Республика Адыгея</option>
                                    <option value="altai-republic">Республика Алтай</option>
                                    <option value="bashkortostan">Республика Башкортостан</option>
                                    <option value="buryatia">Республика Бурятия</option>
                                    <option value="dagestan">Республика Дагестан</option>
                                    <option value="ingushetia">Республика Ингушетия</option>
                                    <option value="kabardino-balkaria">Кабардино-Балкарская Республика</option>
                                    <option value="kalmykia">Республика Калмыкия</option>
                                    <option value="karachay-cherkess">Карачаево-Черкесская Республика</option>
                                    <option value="karelia">Республика Карелия</option>
                                    <option value="komi">Республика Коми</option>
                                    <option value="mari-el">Республика Марий Эл</option>
                                    <option value="mordovia">Республика Мордовия</option>
                                    <option value="sakha-yakutia">Республика Саха (Якутия)</option>
                                    <option value="north-ossetia">Республика Северная Осетия — Алания</option>
                                    <option value="tatarstan">Республика Татарстан</option>
                                    <option value="tyva">Республика Тыва</option>
                                    <option value="udmurt">Удмуртская Республика</option>
                                    <option value="khakassia">Республика Хакасия</option>
                                    <option value="chechnya">Чеченская Республика</option>
                                    <option value="chuvashia">Чувашская Республика</option>
                                    
                                    <!-- Края -->
                                    <option value="altai-krai">Алтайский край</option>
                                    <option value="zabaykalsky">Забайкальский край</option>
                                    <option value="kamchatka">Камчатский край</option>
                                    <option value="krasnodar">Краснодарский край</option>
                                    <option value="krasnoyarsk">Красноярский край</option>
                                    <option value="permsky">Пермский край</option>
                                    <option value="primorsky">Приморский край</option>
                                    <option value="stavropol">Ставропольский край</option>
                                    <option value="khabarovsk">Хабаровский край</option>

                                    <!-- Области -->
                                    <option value="amur">Амурская область</option>
                                    <option value="arkhangelsk">Архангельская область</option>
                                    <option value="astrakhan">Астраханская область</option>
                                    <option value="belgorod">Белгородская область</option>
                                    <option value="bryansk">Брянская область</option>
                                    <option value="vladimir">Владимирская область</option>
                                    <option value="volgograd">Волгоградская область</option>
                                    <option value="vologda">Вологодская область</option>
                                    <option value="voronezh">Воронежская область</option>
                                    <option value="ivanovo">Ивановская область</option>
                                    <option value="irkutsk">Иркутская область</option>
                                    <option value="kaliningrad">Калининградская область</option>
                                    <option value="kaluga">Калужская область</option>
                                    <option value="kemerovo">Кемеровская область — Кузбасс</option>
                                    <option value="kirov">Кировская область</option>
                                    <option value="kostroma">Костромская область</option>
                                    <option value="kurgan">Курганская область</option>
                                    <option value="kursk">Курская область</option>
                                    <option value="leningrad">Ленинградская область</option>
                                    <option value="lipetsk">Липецкая область</option>
                                    <option value="magadan">Магаданская область</option>
                                    <option value="moscow-region">Московская область</option>
                                    <option value="murmansk">Мурманская область</option>
                                    <option value="nizhny-novgorod">Нижегородская область</option>
                                    <option value="novgorod">Новгородская область</option>
                                    <option value="novosibirsk">Новосибирская область</option>
                                    <option value="omsk">Омская область</option>
                                    <option value="orenburg">Оренбургская область</option>
                                    <option value="orel">Орловская область</option>
                                    <option value="penza">Пензенская область</option>
                                    <option value="pskov">Псковская область</option>
                                    <option value="rostov">Ростовская область</option>
                                    <option value="ryazan">Рязанская область</option>
                                    <option value="samara">Самарская область</option>
                                    <option value="saratov">Саратовская область</option>
                                    <option value="sakhalin">Сахалинская область</option>
                                    <option value="sverdlovsk">Свердловская область</option>
                                    <option value="smolensk">Смоленская область</option>
                                    <option value="tambov">Тамбовская область</option>
                                    <option value="tver">Тверская область</option>
                                    <option value="tomsk">Томская область</option>
                                    <option value="tula">Тульская область</option>
                                    <option value="tyumen">Тюменская область</option>
                                    <option value="ulyanovsk">Ульяновская область</option>
                                    <option value="chelyabinsk">Челябинская область</option>
                                    <option value="yaroslavl">Ярославская область</option>
                                    
                                    <!-- Автономные округа и области -->
                                    <option value="jewish">Еврейская автономная область</option>
                                    <option value="nenets">Ненецкий автономный округ</option>
                                    <option value="khanty-mansi">Ханты-Мансийский автономный округ — Югра</option>
                                    <option value="chukotka">Чукотский автономный округ</option>
                                    <option value="yamalo-nenets">Ямало-Ненецкий автономный округ</option>
                                    <option value="none">Я не из России</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div id="step-8" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">location_on</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Информация о проживании</h3>
                            <p class="mt-2 text-gray-600">Введите ваш город проживания</p>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="city" class="block mb-2 text-sm font-medium text-gray-700">Город проживания</label>
                                <input type="text" id="city" name="city" required 
                                    class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                    placeholder="Брянск">
                                <ul id="city-suggestions" class="absolute z-50 hidden w-full mt-1 overflow-y-auto bg-white border border-gray-300 rounded-lg max-h-40"></ul>
                            </div>
                        </div>
                    </div>

                    <div id="step-9" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">church</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Наименование Вашей Церкви</h3>
                            <p class="mt-2 text-gray-600">Введите наименование Церкви, которую Вы посещаете</p>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="church" class="block mb-2 text-sm font-medium text-gray-700">Церковь</label>
                                <input type="text" id="church" name="church" required 
                                    class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                    placeholder="ЕХБ Первый Брянск">
                                <ul id="city-suggestions" class="absolute z-50 hidden w-full mt-1 overflow-y-auto bg-white border border-gray-300 rounded-lg max-h-40"></ul>
                            </div>
                        </div>
                    </div>
                    <div id="step-10" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">church</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Деноминация Вашей Церкви</h3>
                            <p class="mt-2 text-gray-600">Введите деноминацию Церкви, которую Вы посещаете</p>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="denomination" class="block mb-2 text-sm font-medium text-gray-700">Деноминация Церкви</label>
                                <input type="text" id="denomination" name="denomination" required 
                                    class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                    placeholder="Евангельские Христиане Баптисты">
                                <ul id="city-suggestions" class="absolute z-50 hidden w-full mt-1 overflow-y-auto bg-white border border-gray-300 rounded-lg max-h-40"></ul>
                            </div>
                        </div>
                    </div>

                    <div id="step-11" class="hidden form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">person</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Ваше семейное положение</h3>
                            <p class="mt-2 text-gray-600">Укажите ваше семейное положение</p>
                        </div>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 gap-4">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="maritalstatus" value="married" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg maritalstatus-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👨</div> --}}
                                        <span class="font-medium text-gray-900">Женат/Замужем</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="maritalstatus" value="notmarried" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg maritalstatus-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👩</div> --}}
                                        <span class="font-medium text-gray-900">Не женат/Не замужем</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="step-12" class="relative hidden pb-32 form-step sm:pb-20">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">bed</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Ночлег</h3>
                            <p class="mt-2 text-gray-600">Укажите один из вариантов, который вам подходит</p>
                        </div>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 gap-4">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="sleep" value="required" disabled class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 bg-gray-300 border-2 border-gray-300 rounded-lg sleep-option">
                                        {{-- <div class="mb-2 text-2xl">👨</div> --}}
                                        <span class="font-medium text-gray-600">Мне нужен ночлег*</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="sleep" value="self" required class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 border-2 border-gray-300 rounded-lg sleep-option hover:border-confprimary">
                                        {{-- <div class="mb-2 text-2xl">👩</div> --}}
                                        <span class="font-medium text-gray-900">Я самостоятельно решу этот вопрос</span>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="sleep" value="help" disabled class="sr-only">
                                    <div class="p-4 text-center transition-all duration-200 bg-gray-300 border-2 border-gray-300 rounded-lg sleep-option">
                                        {{-- <div class="mb-2 text-2xl">👩</div> --}}
                                        <span class="font-medium text-gray-600">Я ночую дома, и у меня есть возможность предоставить ночлег</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 p-4 text-sm text-red-500">
                            <p>*ВНИМАНИЕ: В связи с ограниченным количеством мест, на данный момент мы не можем предоставить ночлег участникам конференции.</p>
                        </div>
                    </div>

                    <div id="step-13" class="form-step">
                        <div class="mb-6 text-center">
                            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full bg-confprimary">
                                <span class="text-3xl text-white material-icons">comment</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">Ваши пожелания и комментарии</h3>
                            <p class="mt-2 text-gray-600">Если у вас есть что нам сказать - пишите!</p>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="wishes" class="block mb-2 text-sm font-medium text-gray-700">Пожелания/комментарии</label>
                                <input type="text" id="wishes" name="wishes" 
                                    class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-confprimary focus:border-transparent"
                                    placeholder="Я считаю...">
                                <ul id="city-suggestions" class="absolute z-50 hidden w-full mt-1 overflow-y-auto bg-white border border-gray-300 rounded-lg max-h-40"></ul>
                            </div>
                        </div>
                    </div>

                     {{-- Navigation Buttons  --}}
                    <div class="flex justify-between gap-2 mt-8">
                        <!-- Back кнопка -->
                        <button type="button" id="prev-btn" onclick="previousStep()"
                                class="flex items-center justify-center hidden w-12 h-12 text-gray-700 border border-gray-300 rounded-full hover:bg-gray-100">
                            <span class="material-icons">arrow_back</span>
                        </button>

                        <div class="flex-1"></div>

                        <!-- Next кнопка -->
                        <button type="button" id="next-btn" onclick="nextStep()"
                                class="flex items-center justify-center w-12 h-12 text-white rounded-full bg-confprimary hover:bg-confsecondary">
                            <span class="material-icons">arrow_forward</span>
                        </button>

                        <!-- Submit кнопка -->
                        <button type="submit" id="submit-btn"
                                class="flex items-center justify-center hidden w-12 h-12 text-white rounded-full bg-confprimary hover:bg-confsecondary">
                            <span class="material-icons">check</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        let currentStep = 1;
        const totalSteps = 13;

        function updateProgress() {
            const progress = (currentStep / totalSteps) * 100;
            document.getElementById('progress-bar').style.width = progress + '%';
            document.getElementById('current-step').textContent = currentStep;
            document.getElementById('progress-percent').textContent = Math.round(progress);
        }

        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.form-step').forEach(el => el.classList.add('hidden'));
            
            // Show current step
            document.getElementById(`step-${step}`).classList.remove('hidden');
            
            // Update navigation buttons
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');
            
            if (step === 1) {
                prevBtn.classList.add('hidden');
            } else {
                prevBtn.classList.remove('hidden');
            }
            
            if (step === totalSteps) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                submitBtn.classList.add('hidden');
            }
            
            updateProgress();
        }

        function nextStep() {
            if (validateCurrentStep() && currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function previousStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function validateCurrentStep() {
            const currentStepEl = document.getElementById(`step-${currentStep}`);
            const inputs = currentStepEl.querySelectorAll('input[required], select[required], textarea[required]');

            let isValid = true;

            inputs.forEach(input => {
                if (input.type === 'radio') {
                    // Проверяем всю группу
                    const groupName = input.name;
                    const checked = currentStepEl.querySelector(`input[name="${groupName}"]:checked`);
                    if (!checked) {
                        isValid = false;
                    }
                } else if (input.type === 'checkbox') {
                    if (!input.checked) {
                        isValid = false;
                    }
                } else {
                    if (!input.value.trim()) {
                        isValid = false;
                    }
                }
            });

            if (!isValid) {
                // Подсветка ошибки (например, красная рамка)
                currentStepEl.classList.add('animate-shake');
                setTimeout(() => currentStepEl.classList.remove('animate-shake'), 500);
            }

            return isValid;
        }

         // Handle radio button styling
        document.addEventListener('change', function(e) {
            if (e.target.type === 'radio') {
                // Reset all options in the same group
                const groupName = e.target.name;
                document.querySelectorAll(`input[name="${groupName}"]`).forEach(radio => {
                    const option = radio.parentElement.querySelector('.gender-option, .age-option, .maritalstatus-option, .sleep-option');
                    if (option) {
                        option.classList.remove('border-confprimary', 'bg-blue-50');
                        option.classList.add('border-gray-300');
                    }
                });
                
                // Highlight selected option
                const selectedOption = e.target.parentElement.querySelector('.gender-option, .age-option, .maritalstatus-option, .sleep-option');
                if (selectedOption) {
                    selectedOption.classList.add('border-confprimary', 'bg-blue-50');
                    selectedOption.classList.remove('border-gray-300');
                }
            }
        });

        // Handle form submission
       function collectFormData() {
            const formData = new FormData();
            
            // Получаем все шаги формы
            document.querySelectorAll('.form-step').forEach(step => {
                // Ищем все input, select, textarea
                step.querySelectorAll('input, select, textarea').forEach(input => {
                    if (!input.name) return; // пропускаем, если нет name
                    if (input.type === 'radio') {
                        if (input.checked) formData.append(input.name, input.value);
                    } else if (input.type === 'checkbox') {
                        formData.append(input.name, input.checked ? 1 : 0);
                    } else {
                        formData.append(input.name, input.value.trim());
                    }
                });
            });

            return formData;
        }

        // Пример обработки сабмита формы
        document.getElementById('registration-form').addEventListener('submit', async function(e) {
            e.preventDefault();

            // Валидация последнего шага
            if (!validateCurrentStep()) return;

            // Собираем данные
            const data = collectFormData();

            // Пример отправки на сервер через fetch
            
            try {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                const response = await fetch('/conference/registration', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: data,
                });

                if (response.ok) {
                    const result = await response.json();
                    if (result.success) {
                        window.location.replace("/conference/success");
                    }else{
                        window.location.replace("/conference/fial");
                    }
                }else if (response.status === 422) {
                // Ошибки валидации
                    const errorData = await response.json();
                    console.error("⚠️ Ошибки валидации:", errorData.errors);

                    // Показываем все ошибки через тосты
                    Object.values(errorData.errors).forEach(messages => {
                        messages.forEach(msg => showToast(msg, "error"));
                    });
                } else {
                    const errorText = await response.text();
                    console.error("❌ Ошибка:", errorText);
                    alert('Ошибка при отправке формы.');
                }
            } catch (err) {
                console.error('Ошибка отправки формы:', err);
                alert('Произошла ошибка, попробуйте еще раз.');
            }
        });

        // Initialize
        showStep(1);
    </script>