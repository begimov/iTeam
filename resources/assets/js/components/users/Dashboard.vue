<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3" v-for="order in orders" :key="order.id">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Оплачен
                    </div>
                    <img class="card-img-top" src="https://iteam.ru/landing/template/img/mp_ychet.png">
                    <div class="card-body">
                        <p class="card-text">Название мастер-проекта или мастер-класса</p>
                        <a href="#" class="btn btn-primary">Материалы</a>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</template>

<script src="./dashboard.js"></script>
