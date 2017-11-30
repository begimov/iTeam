<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4" v-for="order in orders" :key="order.id">
                <div class="card">
                    <img class="card-img-top" src="https://iteam.ru/landing/template/img/mp_ychet.png">
                    <div class="card-body">
                        <h4 class="card-title">Card title that wraps to a new line</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</template>

<script src="./dashboard.js"></script>
