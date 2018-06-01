<template>
    <div class="col">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>
        <div class="card mb-2">
            <div class="card-body bg-dark text-white lead">
                Вы&nbsp;выбрали продукт &laquo;{{ this.order.product.data.name }}&raquo;, к&nbsp;оплате&nbsp;&mdash; {{ this.order.price }}&nbsp;руб., пожалуйста заполните данные для выставления счета.
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body">
                <a href="/company/offer" target="_blank">Важно! Прочитайте до того, как оплатить счёт</a>
            </div>
        </div>  

        <div class="row my-4">
            <div class="col">
                <form @submit.prevent="getInvoice">
                    <div class="form-group">
                        <label>Организационно-правовая форма</label>
                        <select v-model="businessEntitiyId" class="form-control">
                            <option disabled value="">Выберите один из вариантов</option>
                            <option v-for="businessEntitiy in businessEntities" :key="businessEntitiy.id" :value="businessEntitiy.id">
                                {{ businessEntitiy.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company">Название компании</label>
                        <input type="text" v-model="companyName" class="form-control" id="company" aria-describedby="company" placeholder="Введите название компании...">
                    </div>
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" v-model="username" class="form-control" id="name" aria-describedby="name" placeholder="Введите ваше имя...">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" v-model="phone" class="form-control" id="phone" aria-describedby="phone" placeholder="Введите ваш телефон...">
                    </div>
                    <button type="submit" class="btn btn-primary">Получить</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script src="./invoice.js"></script>
