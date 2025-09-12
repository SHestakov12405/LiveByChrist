<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ты в резерве!</title>
</head>
<body style="margin:0; padding:0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin:auto; font-family: sans-serif; background-color: #f9fafb; border-radius: 10px;">

    <tr>
        <td bgcolor="#ffffff" style="padding:30px; font-size:16px; color:#333333; line-height:1.6;">

            <h1 style="font-size:24px; font-weight:bold; margin-bottom:20px;">Привет, {{ $participant->name }}!</h1>

            <p style="margin-bottom:20px;">Только что ты {{$participant->pol == 'man' ? 'прошел' : 'прошла'}} регистрацию на подростковый выезд в Бытошь с 7 по 12 июля. Но к сожалению места для {{$participant->pol == 'man' ? 'мальчиков' : 'девочек'}} уже закончились. Поэтому мы занесли тебя в резерв.</p>
            <p style="margin-bottom:20px;">Это означает, что если какой-либо из зарегестрированных в основную смену ребят откажется от поездки, то мы заменим его на человека из резерва. Это может быть ты! Поэтому еще не все потеряно! Если так произойдет, то мы тебя обязательно оповестим! Если же оповещения не придет - значит ты не {{$participant->pol == 'man' ? 'попал' : 'попала'}} в смену.</p>


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