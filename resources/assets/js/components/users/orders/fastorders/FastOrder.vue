<template>
    <div class="col-lg-8 col-md-10">
        <div class="card mb-3 text-center">
            <div class="card-header bg-dark text-light pb-1"><h2>Ваш заказ</h2></div>
            <div class="card-body">
                <h3>{{ order.product.name }}</h3>
                <h2><span class="badge badge-info">{{ order.price }}</span></h2>
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
        </div>
    </div>
</template>

<script src="./fastorder.js"></script>
