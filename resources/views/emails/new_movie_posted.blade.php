@component('mail::message')


A new movie titled **{{ $movie->title }}** has just been posted.

@component('mail::button', ['url' => route('movies.show', $movie->id)])
View Movie
@endcomponent

Thanks,<br>
<h4> Africred technical interview test </h4>
{{ config('app.name') }}
@endcomponent
