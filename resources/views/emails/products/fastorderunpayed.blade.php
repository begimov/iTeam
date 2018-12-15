@component('mail::message')
# Здравствуйте!

Вы сделали заказ материалов.
На данный момент Ваш заказ не оплачен.
Чтобы завершить заказ, пожалуйста пройдите по ссылке:

@component('mail::button', ['url' => $orderUrl])
Перейти
@endcomponent

{{ config('app.name') }}
@endcomponent
