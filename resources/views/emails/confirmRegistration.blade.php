@component('mail::message')
# Congratulations!

You have successfully registered on the {{ config('app.name') }}. Enjoy the best chatting service.

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
