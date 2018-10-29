<template>
    <div class="col-lg-6 col-md-8">
        <div class="card mb-3 text-center">
            <div class="card-header bg-dark text-light pb-1"><h2>Ваш заказ</h2></div>
            <div class="card-body">
                <h3>{{ order.product.name }}</h3>
                <h2><span class="badge badge-info">{{ order.price }}</span></h2>
                <a href="#" class="btn btn-primary btn-lg">ОПЛАТИТЬ</a>
            </div>
        </div>
    </div>
</template>

<script src="./fastorder.js"></script>
