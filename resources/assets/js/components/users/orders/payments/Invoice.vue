<template>
    <div class="col">
        <div class="card mb-2">
            <div class="card-body bg-dark text-white lead">
                Вы&nbsp;выбрали продукт &laquo;{{ this.order.product.data.name }}&raquo;, к&nbsp;оплате&nbsp;&mdash; {{ this.order.price }}&nbsp;руб., пожалуйста заполните данные для выставления счета.
            </div>
        </div>

        <div class="text-center">
            //
        </div>
    </div>
</template>

<script src="./invoice.js"></script>
