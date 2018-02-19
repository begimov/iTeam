<template>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ this.order.product.data.name }}</h5>
                <button type="button" class="close" @click.prevent="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a :class="{ 'nav-link': true, 'active': false }" href="#">Яндекс.Касса</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Единая касса</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">ОПЛАТИТЬ</button>
            </div>
            </div>
        </div>
    </div>
</template>

<script src="./payment.js"></script>
<style>
.modal {
    display: block;
    overflow: auto; /* Enable scroll if needed */
    background-color: #999;
    background-color: rgba(0,0,0,0.4);
}
</style>
