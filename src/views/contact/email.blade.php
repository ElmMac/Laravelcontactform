@component('mail::message')
# Introduction

There is New Message from {{ $firstname }}
<br>
Message : {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
