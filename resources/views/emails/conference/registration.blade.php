@component('mail::message')
<style>
    /* Внутренний стиль для email (будет применяться в большинстве клиентов) */
    .registration-info {
        background-color: #f4f4f4;
        padding: 10px;
        border-radius: 6px;
        margin: 10px 0;
    }
    .registration-info b {
        color: #333333;
    }
</style>

# Привет, {{ $registration->name }}! 🎉

Спасибо, что зарегистрировался на конференцию **Живи Христом!**

## Твои данные регистрации:

<div class="registration-info">
Email: {{ $registration->email }}<br>
ID регистрации: {{ $registration->id }}
</div>

Если у тебя есть вопросы, можешь связаться по телефону: **+79532791763**📞

Надеемся увидеть тебя на **Живи Христом 2025**!

С уважением,  
**Команда Живи Христом**
@endcomponent