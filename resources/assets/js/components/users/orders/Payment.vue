<template>
    <div class="modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ this.order.product.data.name }}</h5>
                    <a href="#" @click.prevent="closePayment">
                        <h3><span class="font-weight-bold" aria-hidden="true">&times;</span></h3>
                    </a>
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
                        <div class="row mt-4" v-if="selectedPaymentTypeId === 1">
                            <walletone-payment :order="order"/>
                        </div>
                    </div>
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
