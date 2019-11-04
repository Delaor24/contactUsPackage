@component('mail::message')
# Introduction
Dear {{$name}} thank you for your message
<br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
