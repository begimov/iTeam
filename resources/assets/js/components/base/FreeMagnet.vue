<template>
    <div :class="{ 'text-center': layoutType === 'horizontal' }">

        <h2 class="font-weight-bold text-primary mb-2">{{ title }}</h2>
        <p class="mb-2 lead">{{ description }}</p>

        <form action="/grform/payment" method="get" id="grForm" @submit.prevent="register">

            <div :class="{ 'row': layoutType === 'horizontal' }">

                <div :class="{ 'col-md-4': layoutType === 'horizontal' }">
                    <div class="form-group mb-3">
                        <input type="text" :class="{ 'form-control':true, 'is-invalid': errors.name }" name="name" placeholder="Имя" v-model="params.name">
                        <div class="invalid-feedback" v-if="errors.name">
                            {{ errors.name[0] }}
                        </div>
                    </div>
                </div>

                <div :class="{ 'col-md-4': layoutType === 'horizontal' }">
                    <div class="form-group mb-3">
                        <input type="email" :class="{ 'form-control':true, 'is-invalid': errors.email }" name="email" placeholder="Эл.адрес" v-model="params.email">
                        <div class="invalid-feedback" v-if="errors.email">
                            {{ errors.email[0] }}
                        </div>
                    </div>
                </div>

                <div :class="{ 'col-md-4': layoutType === 'horizontal' }">
                    <div class="form-group mb-3">
                        <input type="text" :class="{ 'form-control':true, 'is-invalid': errors.phone }" name="phone" placeholder="Телефон" v-model="params.phone">
                        <div class="invalid-feedback" v-if="errors.phone">
                            {{ errors.phone[0] }}
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="campaign_token" v-model="params.campaignToken" />
            <div class="alert alert-danger" role="alert" v-if="errors._message">
                {{ errors._message }}
            </div>
            <div v-if="isLoading" class="alert alert-success">Пожалуйста подождите...</div>
            <button class="btn btn-primary btn-lg" id="grFormBtn" v-if="!isLoading">{{ buttonText }}</button>
        </form>

    </div>
</template>

<script src="./freemagnet.js"></script>