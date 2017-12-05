<template>
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card" :class="{'border-success': isPaid, 'border-danger': !isPaid}">
            <div class="card-header text-white" :class="[isPaid ? 'bg-success' : 'bg-danger']">
                {{ isPaid ? 'Оплачен' : 'Не оплачен' }} ({{order.id}})
            </div>
            <img class="card-img-top" src="https://iteam.ru/landing/template/img/mp_ychet.png">
            <div class="card-body">
                <p class="card-text">Название мастер-проекта или мастер-класса</p>
                <a href="#" class="btn btn-primary" v-if="isPaid" @click.prevent="openProduct">Материалы</a>
                <template v-else>
                    <a href="#" class="btn btn-dark">Оплатить</a>
                    <a href="#" class="btn btn-link">Удалить</a>
                </template>
            </div>
        </div>
    </div> 
</template>

<script src="./ordercard.js"></script>
