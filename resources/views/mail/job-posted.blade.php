<x-mail::message>
# Congrats!

Your job {{ $title }} is now live.

<x-mail::button :url="$url">
View The Add
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
