@component('mail::message')
# Hello

You have initiated a {{ $data->transactionType() }}.
<br>
<strong>Amount: {{ $data->amount }} USD</strong>
<br>
<p>Enter your OTP code to complete your transfer, Or Request for OTP code if you don't have any through the email below</p>
<p><a href="mailto:support@lifepaytrust.com">support@lifepaytrust.com</a></p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
