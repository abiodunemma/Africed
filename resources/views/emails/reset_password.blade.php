@component('mail::message')


You requested a password reset. Click the button below to reset your password:

@component('mail::button', ['url' => url('password/reset', $token)])
Reset Password
@endcomponent

If you did not request a password reset, no further action is required.

Thanks, Alot<br>
<h4> Africred technical interview test </h4>
{{ config('app.name') }}
@endcomponent
