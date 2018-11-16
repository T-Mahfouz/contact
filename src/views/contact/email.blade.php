@component('mail::message')
# Introduction

Hello {{$username}}

<br>
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
