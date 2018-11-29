<template>
    <div class="modal fade" id="modal-window-payment" tabindex="-1" role="dialog" aria-labelledby="modalWindow" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ order.product.data.name }}</h5>
                    <button type="button" class="close" @click="closePayment" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><h3>&times;</h3></span>
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
                        <div class="row mt-4">
                            <walletone-payment v-if="selectedPaymentTypeId === 1" :order="order"/>
                            <invoice-payment v-if="selectedPaymentTypeId === 2" :order="order"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./payment.js"></script>
