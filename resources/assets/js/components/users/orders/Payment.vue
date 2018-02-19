<template>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" @click.prevent="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
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
