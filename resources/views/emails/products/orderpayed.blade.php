@component('mail::message')
# Спасибо за покупку

Оплаченные материалы доступны в вашем личном кабинете.

@component('mail::button', ['url' => config('urls.panel')])
Перейти
@endcomponent

{{ config('app.name') }}
@endcomponent
