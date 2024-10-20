@component('mail::message')
# New Movie Posted!

A new movie titled **{{ $movie->title }}** has just been posted. Don't miss it!

@component('mail::button', ['url' => route('movies.show', $movie->id)])
View Movie
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
