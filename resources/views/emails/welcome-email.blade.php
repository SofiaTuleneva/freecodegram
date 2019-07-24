@component('mail::message')

# Hello!

Thank you for joining us!

@component('mail::button', ['url' => ''])
OK
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
