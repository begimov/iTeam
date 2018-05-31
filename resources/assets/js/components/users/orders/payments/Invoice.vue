<template>
    <div class="col">
        <div class="card mb-2">
            <div class="card-body bg-dark text-white lead">
                Вы&nbsp;выбрали продукт &laquo;{{ this.order.product.data.name }}&raquo;, к&nbsp;оплате&nbsp;&mdash; {{ this.order.price }}&nbsp;руб., пожалуйста заполните данные для выставления счета.
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="opf">Организационно-правовая форма</label>
                        <input type="text" class="form-control" id="opf" aria-describedby="opf" placeholder="ОПФ...">
                    </div>
                    <div class="form-group">
                        <label for="company">Название компании</label>
                        <input type="text" class="form-control" id="company" aria-describedby="company" placeholder="Введите название компании...">
                    </div>
                    <button type="submit" class="btn btn-primary">Получить</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script src="./invoice.js"></script>
