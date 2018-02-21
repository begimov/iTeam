<template>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ this.order.product.data.name }}</h5>
                <button type="button" class="close" @click.prevent="closePayment">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item" v-for="paymentType in paymentTypes" v-bind:key="paymentType.id">
                                    <a :class="{ 'nav-link': true, 'active': paymentType.id === selectedPaymentTypeId }" 
                                        href="#"
                                        @click.prevent="selectPaymentType(paymentType.id)">{{ paymentType.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form ref="woform" method="post" action="https://wl.walletone.com/checkout/checkout/Index" v-if="selectedPaymentTypeId === 2">
                    <input type="hidden" name="WMI_MERCHANT_ID" v-model="walletOneOptions.WMI_MERCHANT_ID"/>
                    <input type="hidden" name="WMI_PAYMENT_AMOUNT" v-model="walletOneOptions.WMI_PAYMENT_AMOUNT"/>
                    <input type="hidden" name="WMI_CURRENCY_ID" v-model="walletOneOptions.WMI_CURRENCY_ID"/>
                    <input type="hidden" name="WMI_PAYMENT_NO" v-model="walletOneOptions.WMI_PAYMENT_NO"/>
                    <input type="hidden" name="WMI_DESCRIPTION" v-model="walletOneOptions.WMI_DESCRIPTION"/>
                    <input type="hidden" name="WMI_AUTO_LOCATION" v-model="walletOneOptions.WMI_AUTO_LOCATION"/>
                    <input type="hidden" name="WMI_SUCCESS_URL" v-model="walletOneOptions.WMI_SUCCESS_URL"/>
                    <input type="hidden" name="WMI_FAIL_URL" v-model="walletOneOptions.WMI_FAIL_URL"/>
                    <input type="hidden" name="WMI_SIGNATURE" v-model="walletOneOptions.WMI_SIGNATURE"/>
                    <button type="submit" class="btn btn-primary" @click.prevent="purchase">ОПЛАТИТЬ</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</template>

<script src="./payment.js"></script>
<style>
.modal {
    display: block;
    overflow: auto; /* Enable scroll if needed */
    background-color: #999;
    background-color: rgba(0,0,0,0.4);
}
</style>
