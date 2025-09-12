<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Подтверждение регистрации</title>
</head>
<body style="margin:0; padding:0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin:auto; font-family: sans-serif; background-color: #f9fafb; border-radius: 10px;">
    {{-- <tr>
        <td align="center" bgcolor="#ffffff" style="padding:40px 20px; text-align:center;">
            <img src={{ $message->embed(public_path('assets/images/fon.jpg')) }}  alt="Логотип" width="150" style="display:block; margin:auto;">
        </td>
    </tr> --}}

    <tr>
        <td bgcolor="#ffffff" style="padding:30px; font-size:16px; color:#333333; line-height:1.6;">

            <h1 style="font-size:24px; font-weight:bold; margin-bottom:20px;">Привет, {{ $participant->name }}!</h1>

            <p style="margin-bottom:20px;">Ты успешно {{$participant->pol == 'man' ? 'зарегистрировался' : 'зарегистрировалась'}} на подростковый выезд в Бытошь с 7 по 12 июля.</p>

            <h3 style="font-size:18px; font-weight:bold; margin-bottom:10px;">Что взять с собой:</h3>
            <ul style="list-style:none; padding-left:0; margin:0;">
                <li style="margin-bottom:10px;"><span style="color:#007BFF;">✔</span> Деньги — 6000 ₽ для регистрации</li>
                <li style="margin-bottom:10px;"><span style="color:#007BFF;">✔</span> Средства личной гигиены</li>
                <li style="margin-bottom:10px;"><span style="color:#007BFF;">✔</span> Постельное бельё(наволочку, простыню и пододеяльник)</li>
                <li style="margin-bottom:10px;"><span style="color:#007BFF;">✔</span> Библия</li>
                <li style="margin-bottom:10px;"><span style="color:#007BFF;">✔</span> Одежда(на встречи, игры, купания, и для свободного времени)</li>
                <li style="margin-bottom:10px;"><span style="color:#007BFF;">✔</span> Хорошее настроение</li>
            </ul>

            {{-- <p style="margin-top:30px; font-style:italic; color:#7a7a7a;">«Никакое гнилое слово да не исходит из уст ваших...» (Еф. 4:29)</p> --}}

            <p style="margin-top:30px; color:#333;">С любовью,<br><strong>Команда Живи Христом</strong></p>

        </td>
    </tr>

    <tr>
        <td bgcolor="#f4f4f4" style="padding:20px; text-align:center; font-size:12px; color:#999;">
            &copy; {{ date('Y') }} Живи Христом
        </td>
    </tr>
</table>

</body>
</html>
{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Подтверждение регистрации</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: Arial, sans-serif;">

<table cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: auto;">
    <tr>
        <td style="padding: 20px; text-align: center;">
            <img src={{url('/public/assets/images/fon.jpg')}}  alt="Баннер" width="100%" style="display: block; max-width: 100%; height: auto; border-radius: 8px;">
        </td>
    </tr>

    <tr>
        <td style="padding: 30px; font-size: 16px; color: #111827; line-height: 1.6;">
            <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">
                Привет, {{ $participant->name }}!
            </h1>
            <p style="margin-bottom: 20px;">
                Поздравляем! Вы успешно зарегистрировались на подростковый выезд в Бытошь.
            </p>
            <p style="margin-bottom: 20px;">
                <strong>Что взять с собой:</strong><br>
                ✔ Деньги — 6000 ₽<br>
                ✔ Средства личной гигиены<br>
                ✔ Постельное бельё<br>
                ✔ Библия<br>
                ✔ Одежда<br>
                ✔ Хорошее настроение ❤️
            </p>
            <p>
                Мы очень рады, что ты с нами! Готовься к морю эмоций, душевным разговорам, играм и встречам!
            </p>
        </td>
    </tr>

    <tr>
        <td style="padding: 20px; text-align: center; font-size: 14px; color: #6b7280; background-color: #f9fafb;">
            &copy; {{ date('Y') }} Команда организаторов выезда
        </td>
    </tr>
</table>

</body>
</html> --}}
{{-- <!DOCTYPE html>
<html>
<head>
    <title>Регистрация на подростковый выезд Бытошь</title>
</head>
<body>
    <h1>Здравствуйте, {{ $participant->name }}!</h1>
    <p>Ты успешно зарегистрировались на подростковую смену в Бытошь.</p>
    <h3>Что взять с собой:</h3>
    <ul>
        <li><strong>Деньги — 6000 ₽</strong> (на оплату регистрации)</li>
        <li><strong>Средства личной гигиены</strong></li>
        <li><strong>Постельное белье</strong> (простыня, пододеяльник, наволочка, подушка)</li>
        <li><strong>Библия</strong> (важно для наших встреч и личного времени с Богом)</li>
        <li><strong>Одежда</strong> (удобная, по погоде, целомудренная)</li>
        <li><strong>Хорошее настроение</strong></li>
    </ul>

    <!-- Завершающий абзац -->
    <p>
        Мы очень рады, что ты с нами!
    </p>

    <!-- Подпись -->
    <div>
        С любовью,<br>
        <strong>Команда Живи Христом</strong>
    </div>

</body>
</html> --}}