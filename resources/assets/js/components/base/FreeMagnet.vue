<template>
    <div>
        <h2 class="font-weight-bold text-primary mb-1">Вам подарок!</h2>
        <p class="mb-2 lead">Мастер-класс &laquo;Как улучшить бизнес процессы компании&raquo;</p>
        <form action="/grform/payment" method="get" id="grForm" @submit.prevent="register">
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="name" placeholder="Имя" v-model="modal.name">
            </div>
            <div class="form-group mb-2">
                <input type="email" class="form-control" name="email" placeholder="Эл.адрес" v-model="modal.email">
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control" name="phone" placeholder="Телефон" v-model="modal.phone">
            </div>
            <input type="hidden" name="campaign_token" v-model="modal.campaign_token" />
            <button class="btn btn-primary disabled" id="grFormBtn" v-if="isLoading">ОТПРАВКА...</button>
            <button class="btn btn-primary" id="grFormBtn" v-else>{{ buttonText }}</button>
            <p class="help-block alert-danger" id="grFormHelpBlock" v-if="error">{{ error }}</p>
            <p class="help-block alert-success" id="grFormHelpBlock" v-if="msg">{{ msg }}</p>
        </form>
    </div>
</template>

<script src="./freemagnet.js"></script>