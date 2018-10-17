<template>
    <div class="col">
        <div class="card mb-2">
            <div class="card-body bg-dark text-white lead">
                Вы&nbsp;выбрали продукт &laquo;{{ this.order.product.data.name }}&raquo;, к&nbsp;оплате&nbsp;&mdash; {{ this.order.total_price }}&nbsp;руб., сейчас вы&nbsp;будете перенаправлены на&nbsp;страницу платежного агрегатора WalletOne.
            </div>
        </div>

        <div class="text-center">
            <h3><span class="badge badge-dark">{{ order.total_price }}&nbsp;руб.</span></h3>
            <button class="btn btn-primary btn-lg" @click.prevent="purchase">ОПЛАТИТЬ</button>
        </div>

        <div class="card mt-2">
            <div class="card-body">
               <p>//</p>
            </div>
        </div>  
    </div>
</template>

<script src="./yakassa.js"></script>
