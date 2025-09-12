Здравствуйте, {{ $participant->name }}!
Вы успешно зарегистрировались на подростковую смену в Бытошь.
Ваше приблизительные данные:
@if($participant->group->mentors->count())
Наставники: {{$participant->group->mentors->map(fn($mentor) => "$mentor->surname $mentor->name")->join(', ')}}
@else
Наставники: для вас пока что не назначены
@endif

@if($participant->group->location->count())
Жилье: {{$participant->group->location->title}}
@else
Жилье: для вас пока что не назначены
@endif