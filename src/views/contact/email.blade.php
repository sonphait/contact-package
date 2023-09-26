<x-mail::message>
# Introduction

    This is new query from {{$name}}
    <br>
    Message:
{{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
