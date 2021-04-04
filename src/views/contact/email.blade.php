@component('mail::message')
# Introduction

There is query from {{$name}}
Message:
<br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
