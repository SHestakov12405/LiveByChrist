<?php

namespace App\Http\Requests\Conference;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:conference_registrations,email',
            'phone' => 'required|regex:/^\+7\d{10}$/',
            'gender' => 'required|in:brother,sister',
            'age' => 'required|in:15-17,18-20,21-25,26-30,30+',
            'region' => 'required|in:adygea,altai-republic,bashkortostan,buryatia,dagestan,ingushetia,kabardino-balkaria,kalmykia,karachay-cherkess,karelia,komi,mari-el,mordovia,sakha-yakutia,north-ossetia,tatarstan,tyva,udmurt,khakassia,chechnya,chuvashia,altai-krai,zabaykalsky,kamchatka,krasnodar,krasnoyarsk,permsky,primorsky,stavropol,khabarovsk,amur,arkhangelsk,astrakhan,belgorod,bryansk,vladimir,volgograd,vologda,voronezh,ivanovo,irkutsk,kaliningrad,kaluga,kemerovo,kirov,kostroma,kurgan,kursk,leningrad,lipetsk,magadan,moscow-region,murmansk,nizhny-novgorod,novgorod,novosibirsk,omsk,orenburg,orel,penza,pskov,rostov,ryazan,samara,saratov,sakhalin,sverdlovsk,smolensk,tambov,tver,tomsk,tula,tyumen,ulyanovsk,chelyabinsk,yaroslavl,jewish,nenets,khanty-mansi,chukotka,yamalo-nenets,none',
            'city' => 'required|string|max:255',
            'church' => 'required|string|max:255',
            'denomination' => 'required|string|max:255',
            'maritalstatus' => 'required|in:married,notmarried',
            'sleep' => 'required|in:required,self,help',
            'wishes' => 'nullable|string|max:2000'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите ваше имя',
            'surname.required' => 'Введите вашу фамилию',
            'email.required' => 'Укажите email',
            'email.email' => 'Неверный формат email',
            'email.unique' => 'Этот email уже зарегистрирован',
            'phone.regex' => 'Телефон должен быть в формате +7XXXXXXXXXX',
            'phone.required' => 'Поле телефон обязательно для заполнения',
            'gender.required' => 'Выберите пол',
            'gender.in' => 'Пол выбран неверно',
            'age.required' => 'Укажите возраст',
            'age.in' => 'Возраст указан неверно',
            'region.required' => 'Выберите регион',
            'region.in' => 'Регион выбран неверно',
            'city.required' => 'Введите город проживания',
            'church.required' => 'Укажите церковь',
            'denomination.required' => 'Укажите деноминацию',
            'maritalstatus.required' => 'Выберите семейное положение',
            'maritalstatus.in' => 'Семейное положение указано неверно',
            'sleep.required' => 'Выберите вариант проживания',
            'sleep.in' => 'Недопустимое значение проживания',
            'wishes.max' => 'Пожелания не могут превышать 2000 символов',
        ];
    }
}

