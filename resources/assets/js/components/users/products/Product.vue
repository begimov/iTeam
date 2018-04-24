<template>
    <div class="col-md-12" v-if="order">
        <a href="#" class="btn btn-primary" @click.prevent="closeProduct">Вернуться к заказам</a>
        <h1 class="my-4">&laquo;{{ product.name }}&raquo;</h1>
        <div class="card mb-3" v-for="material in materials" :key="material.id">
            <div class="card-header pb-1"><h2>{{ material.name }}</h2></div>
            <div class="card-body">
                <template v-if="material.resources.data.length">
                    <h3>Видео:</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mt-3" v-for="resource in material.resources.data" :key="resource.id">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" :src="'https://www.youtube.com/embed/' + resource.identifier" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </template>

                <template v-if="material.files.data.length">
                    <h3 class="mb-3">Материалы:</h3>
                    <ul>
                        <li v-for="file in material.files.data" :key="file.id">
                            <a :href="'webapi/files/' + file.id">{{ file.name }}</a> - {{ Math.round(file.size/1024) }} Kb
                        </li>
                    </ul>
                </template>
            </div>
        </div>
    </div> 
</template>

<script src="./product.js"></script>
