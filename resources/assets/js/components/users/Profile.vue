<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
                <p v-for="order in orders" :key="order.id">{{order.id}} {{order.created_at_human}}</p>
            </div>
        </div>
    </div>
</template>

<script src="./profile.js"></script>
