@component('mail::message')
# Introduction

Hello and greetings.

This is your buy receipt!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
