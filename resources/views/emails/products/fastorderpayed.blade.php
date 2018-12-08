@component('mail::message')
# Спасибо за покупку

Оплаченные материалы доступны по вашей ссылке.

@component('mail::button', ['url' => config('urls.panel')])
Перейти
@endcomponent

{{ config('app.name') }}
@endcomponent
