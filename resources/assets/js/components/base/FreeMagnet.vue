<template>
    <div>
        <h2 class="font-weight-bold text-primary mb-1">Вам подарок!</h2>
        <p class="mb-2 lead">Мастер-класс &laquo;Как улучшить бизнес процессы компании&raquo;</p>
        <form action="/grform/payment" method="get" id="grForm" @submit.prevent="register">
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="name" placeholder="Имя" v-model="params.name">
            </div>
            <div class="form-group mb-2">
                <input type="email" class="form-control" name="email" placeholder="Эл.адрес" v-model="params.email">
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="phone" placeholder="Телефон" v-model="params.phone">
            </div>
            <input type="hidden" name="campaign_token" v-model="params.campaignToken" />
            <button class="btn btn-primary disabled" id="grFormBtn" v-if="isLoading">ОТПРАВКА...</button>
            <button class="btn btn-primary" id="grFormBtn" v-else>{{ buttonText }}</button>
        </form>
    </div>
</template>

<script src="./freemagnet.js"></script>