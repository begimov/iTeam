<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
        <div class="row">
            <product-card v-for="order in orders" :key="order.id" :order="order"></product-card>
        </div>
    </div>
</template>

<script src="./dashboard.js"></script>
