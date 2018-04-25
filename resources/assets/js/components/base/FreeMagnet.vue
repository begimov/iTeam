<template>
    <div>
        <h2 class="font-weight-bold text-primary mb-1">Вам подарок!</h2>
        <p class="mb-2 lead">Мастер-класс &laquo;Как улучшить бизнес процессы компании&raquo;</p>
        <form action="/grform/payment" method="get" id="grForm" @submit.prevent="register">
            <div class="form-group mb-2">
                <input type="text" :class="{ 'form-control':true, 'is-invalid': errors.name }" name="name" placeholder="Имя" v-model="params.name">
                <div class="invalid-feedback" v-if="errors.name">
                    {{ errors.name[0] }}
                </div>
            </div>
            <div class="form-group mb-2">
                <input type="email" :class="{ 'form-control':true, 'is-invalid': errors.email }" name="email" placeholder="Эл.адрес" v-model="params.email">
                <div class="invalid-feedback" v-if="errors.email">
                    {{ errors.email[0] }}
                </div>
            </div>
            <div class="form-group mb-2">
                <input type="text" :class="{ 'form-control':true, 'is-invalid': errors.phone }" name="phone" placeholder="Телефон" v-model="params.phone">
                <div class="invalid-feedback" v-if="errors.phone">
                    {{ errors.phone[0] }}
                </div>
            </div>
            <input type="hidden" name="campaign_token" v-model="params.campaignToken" />
            <button class="btn btn-primary" id="grFormBtn">{{ buttonText }}</button>
        </form>
    </div>
</template>

<script src="./freemagnet.js"></script>