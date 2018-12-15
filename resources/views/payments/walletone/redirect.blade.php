@extends('layouts.blank')

@section('content')
    <form ref="woform" method="post" action="https://wl.walletone.com/checkout/checkout/Index">  
        <input type="hidden" name="WMI_MERCHANT_ID" value="{{ $paymentData['WMI_MERCHANT_ID'] }}"/>
        <input type="hidden" name="WMI_PAYMENT_AMOUNT" value="{{ $paymentData['WMI_PAYMENT_AMOUNT'] }}"/>
        <input type="hidden" name="WMI_CURRENCY_ID" value="{{ $paymentData['WMI_CURRENCY_ID'] }}"/>
        <input type="hidden" name="WMI_PAYMENT_NO" value="{{ $paymentData['WMI_PAYMENT_NO'] }}"/>
        <input type="hidden" name="WMI_DESCRIPTION" value="{{ $paymentData['WMI_DESCRIPTION'] }}"/>
        <input type="hidden" name="WMI_AUTO_LOCATION" value="{{ $paymentData['WMI_AUTO_LOCATION'] }}"/>
        <input type="hidden" name="WMI_SUCCESS_URL" value="{{ $paymentData['WMI_SUCCESS_URL'] }}"/>
        <input type="hidden" name="WMI_FAIL_URL" value="{{ $paymentData['WMI_FAIL_URL'] }}"/>
        <input type="hidden" name="WMI_SIGNATURE" value="{{ $paymentData['WMI_SIGNATURE'] }}"/>
        <button id="submitWoForm" type="submit" class="btn btn-primary btn-lg" style="visibility:hidden">ОПЛАТИТЬ</button>
    </form>
@endsection

@section('postJquery')
    $( "#submitWoForm" )[0].click();
@endsection