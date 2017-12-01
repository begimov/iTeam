<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
        <div class="row">
            <order-card 
                v-for="order in orders" 
                :key="order.id" 
                :order="order"
                v-on:showMaterials="showMaterials"></order-card>
        </div>
    </div>
</template>

<script src="./dashboard.js"></script>
