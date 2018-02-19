<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
        <div class="row" v-if="displayedOrderId">
            <product :orderId="displayedOrderId"></product>
        </div>
        <div class="row" v-else>
            <order-card 
                v-for="order in orders" 
                :key="order.id" 
                :order="order"
                v-on:openProduct="openProduct"></order-card>
        </div>
        <order-payment :order="this.paymentOrder" v-if="this.paymentOrder" />
    </div>
</template>

<script src="./dashboard.js"></script>
