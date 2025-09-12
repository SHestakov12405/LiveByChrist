<?php
// Список цветов в HEX без #
$colors = ['d9e1f2', 'e2efda', 'fff2cc', 'fce4d6'];
$colorIndex = $pol == 'man' ? 0 : 2;
$undefinedParticipants = [];
?>
<table>
    <!-- Заголовок -->
    <tr>

    </tr>    
    <tr>
        <td colspan="14" style="font-size: 20px; text-align: center;">
            {{$pol == 'man' ? 'Братья' : 'Сестры' }}, подростковая смена 7 - 12 июля 2025
        </td>
    </tr>
    <tr>
        <td colspan="14" style="font-size: 16px; font-weight: bold; text-align: center;">

        </td>
    </tr>

    <!-- Подзаголовки -->
    <tr style="border: 4px solid #000;">
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">"№<br>п/п"</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">ФИО</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Наставник/участник</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Дата рождения</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Возраст</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Email</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Телефон</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Церковь</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Наставник</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Проживание</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Деньги при заезде</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Остаток</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Болезни участника</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Примечания</th>
    </tr>

    @foreach($groups as $group)
        
        @if ((int)$group->age !== -1)
                
            
            <?php
                // Получаем текущий цвет
                $bgColor = $colors[$colorIndex % count($colors)];
                $colorIndex++;
            ?>
            @foreach($group->mentors()->orderByDesc('main')->get() as $mentor)
                <tr>
                    <td style="background-color: #{{$bgColor}}; font-weight: extrabold; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; font-weight: bold; border: 1px solid #000; text-align: center">{{ "$mentor->surname $mentor->name $mentor->patronymic"}}</td>
                    <td style="background-color: #{{$bgColor}}; font-weight: bold; border: 1px solid #000; text-align: center">Наставник</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$group->location()->first()->title}} ({{$group->location()->first()->seats}} мест)</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                </tr>
            @endforeach
            <!-- Данные -->
            @foreach($group->participants()->get() as $key => $participant)
                <tr>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$key + 1}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{ "$participant->surname $participant->name $participant->patronymic"}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">Участник</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$participant->date_bird}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$participant->age}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$participant->email}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$participant->phone}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$participant->church}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$group->mentors()->orderByDesc('main')->first() ? $group->mentors()->orderByDesc('main')->first()->surname . " " . $group->mentors()->orderByDesc('main')->first()->name : "Неопределён"}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$group->location()->first()->title}} ({{$group->location()->first()->seats}} мест)</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center">{{$participant->diseases ? $participant->diseases : 'Нет'}}</td>
                    <td style="background-color: #{{$bgColor}}; border: 1px solid #000; text-align: center"></td>
                </tr>
            @endforeach
        @endif
    @endforeach
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
     <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
     <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td colspan="14" style="font-size: 20px;">
            Резерв
        </td>
    </tr>
    <tr style="border: 4px solid #000;">
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">"№<br>п/п"</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">ФИО</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Наставник/участник</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Дата рождения</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Возраст</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Email</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Телефон</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Церковь</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Наставник</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Проживание</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Деньги при заезде</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Остаток</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Болезни участника</th>
        <th style="text-align: center; vertical-align: middle; font-weight: bold; border: 1px solid #000;">Примечания</th>
    </tr>
    @foreach($groups as $group)
        @if ((int)$group->age == -1)
            <!-- Данные -->
            @foreach($group->participants()->orderBy('age')->orderBy('created_at')->get() as $key => $participant)
                <tr>
                    <td style="border: 1px solid #000; text-align: center">{{$key + 1}}</td>
                    <td style="border: 1px solid #000; text-align: center">{{ "$participant->surname $participant->name $participant->patronymic"}}</td>
                    <td style="border: 1px solid #000; text-align: center">Участник</td>
                    <td style="border: 1px solid #000; text-align: center">{{$participant->date_bird}}</td>
                    <td style="border: 1px solid #000; text-align: center">{{$participant->age}}</td>
                    <td style="border: 1px solid #000; text-align: center">{{$participant->email}}</td>
                    <td style="border: 1px solid #000; text-align: center">{{$participant->phone}}</td>
                    <td style="border: 1px solid #000; text-align: center">{{$participant->church}}</td>
                    <td style="border: 1px solid #000; text-align: center">-</td>
                    <td style="border: 1px solid #000; text-align: center">-</td>
                    <td style="border: 1px solid #000; text-align: center"></td>
                    <td style="border: 1px solid #000; text-align: center"></td>
                    <td style="border: 1px solid #000; text-align: center">{{$participant->diseases ? $participant->diseases : 'Нет'}}</td>
                    <td style="border: 1px solid #000; text-align: center"></td>
                </tr>
            @endforeach
        @endif
    @endforeach


</table>