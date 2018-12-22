@component('mail::message')
# Здравствуйте!

Спасибо за заказ материалов «{{$product}}»!
Ваш заказ еще не оплачен.
Чтобы оплатить заказ, пожалуйста пройдите по ссылке:

@component('mail::button', ['url' => $orderUrl])
Перейти
@endcomponent

После оплаты вам автоматически откроется доступ к материалам.
По любым вопросам пишите нам по адресу info@iteam.ru

{{ config('app.name') }}
@endcomponent
