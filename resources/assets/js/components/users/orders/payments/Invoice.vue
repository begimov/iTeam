<template>
    <div class="col">
        <div class="card mb-2">
            <div class="card-body bg-dark text-white lead">
                Вы&nbsp;выбрали продукт &laquo;{{ this.order.product.data.name }}&raquo;, к&nbsp;оплате&nbsp;&mdash; {{ this.order.price }}&nbsp;руб., сейчас вы&nbsp;будете перенаправлены на&nbsp;страницу платежного агрегатора WalletOne.
            </div>
        </div>

        <div class="text-center">
            <form ref="woform" method="post" action="https://wl.walletone.com/checkout/checkout/Index">
                <input type="hidden" name="WMI_MERCHANT_ID" v-model="walletOneOptions.WMI_MERCHANT_ID"/>
                <input type="hidden" name="WMI_PAYMENT_AMOUNT" v-model="walletOneOptions.WMI_PAYMENT_AMOUNT"/>
                <input type="hidden" name="WMI_CURRENCY_ID" v-model="walletOneOptions.WMI_CURRENCY_ID"/>
                <input type="hidden" name="WMI_PAYMENT_NO" v-model="walletOneOptions.WMI_PAYMENT_NO"/>
                <input type="hidden" name="WMI_DESCRIPTION" v-model="walletOneOptions.WMI_DESCRIPTION"/>
                <input type="hidden" name="WMI_AUTO_LOCATION" v-model="walletOneOptions.WMI_AUTO_LOCATION"/>
                <input type="hidden" name="WMI_SUCCESS_URL" v-model="walletOneOptions.WMI_SUCCESS_URL"/>
                <input type="hidden" name="WMI_FAIL_URL" v-model="walletOneOptions.WMI_FAIL_URL"/>
                <input type="hidden" name="WMI_SIGNATURE" v-model="walletOneOptions.WMI_SIGNATURE"/>
                <button type="submit" class="btn btn-primary btn-lg" @click.prevent="purchase">ОПЛАТИТЬ</button>
            </form>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <p>Платежный сервис Wallet One, используемый для оплаты наших продуктов, <span class="font-weight-bold">лицензирован надзорным органом в&nbsp;каждой стране присутствия, а&nbsp;значит, полностью безопасен.</span></p>
                <p>Wallet One использует стандарт безопасности PCI&nbsp;DSS, SSL-протокол, системы безопасности Verified by&nbsp;Visa и&nbsp;MasterCard SecureCode.</p>
                <p><a href="https://www.walletone.com/ru/merchant/security/" target="_blank">Подробнее здесь...</a></p>
            </div>
        </div>  
    </div>
</template>

<script src="./invoice.js"></script>
