<template>
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card" :class="{'border-success': isPaid, 'border-danger': !isPaid}">
            <div class="card-header text-white" :class="[isPaid ? 'bg-success' : 'bg-danger']">
                {{ isPaid ? 'Оплачен' : 'Не оплачен' }}
            </div>
            <!-- <img class="card-img-top" src="https://iteam.ru/landing/template/img/mp_ychet.png"> -->
            <div class="card-body">
                <p class="card-text lead font-weight-normal">{{ order.product.data.name }}</p>
                <div v-if="!isPaid">
                    <p v-if="order.quantity > 1">{{ order.price }}&nbsp;руб. * {{ order.quantity }}&nbsp;шт.</p>
                    <h3><span class="badge badge-primary">{{ order.price * order.quantity }}&nbsp;руб.</span></h3>
                </div>
                <a href="#" class="btn btn-primary" v-if="isPaid" @click.prevent="openProduct">Материалы</a>
                <template v-else>
                    <a href="#" class="btn btn-dark" @click.prevent="orderPayment">Оплатить</a>
                    <a href="#" class="btn btn-link" @click.prevent="deleteOrder">Удалить</a>
                </template>
            </div>
        </div>
    </div> 
</template>

<script src="./ordercard.js"></script>
