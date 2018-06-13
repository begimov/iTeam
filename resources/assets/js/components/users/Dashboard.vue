<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>

        <div class="row" v-if="displayedOrderId">
            <product :orderId="displayedOrderId"></product>
        </div>

        <template v-else>

            <div class="row">
                <div class="col">
                    <h1 class="mb-4">Заказы</h1>
                </div>
            </div>
            
            <div class="row" v-if="orders.length">
                <order-card 
                    v-for="order in orders" 
                    :key="order.id" 
                    :order="order"
                    v-on:openProduct="openProduct"
                    v-on:orderPayment="orderPayment"
                    v-on:deleteOrder="deleteOrder"></order-card>
            </div>

            <div class="row" v-else>
                <div class="col">
                    <p>У вас пока нет ни одного заказа</p>
                </div>
            </div>

        </template>

        <order-payment 
            v-if="this.paymentOrder" />
    </div>
</template>

<script src="./dashboard.js"></script>
