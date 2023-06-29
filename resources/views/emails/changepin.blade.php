@component('mail::message')
# Hello {{ $user->first_name.' '.$user->last_name }}

your new pin is {{ $user->pin }}

<p style="color: red">Note: Do note share your pin with anyone, {{ env('APP_NAME') }} will never call you to request for your account pin.</p>
<p>Please contact customer support if you did not initiate this request. </p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
