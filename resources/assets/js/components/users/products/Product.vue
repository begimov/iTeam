<template>
    <div class="col" v-if="order">
        <a href="#" class="btn btn-primary" @click.prevent="closeProduct">Вернуться к заказам</a>
        <!-- <h1 class="my-4">&laquo;{{ product.name }}&raquo;</h1> -->
        <div class="card mt-4 mb-3" v-for="material in materials" :key="material.id">
            <div class="card-header bg-dark text-light pb-1"><h2>{{ material.name }}</h2></div>
            <div class="card-body">
                <template v-if="material.resources.data.length">
                    <h3>Видео:</h3>
                    <div class="row mb-4">
                        <div class="col-md-4 mt-3" v-for="resource in material.resources.data" :key="resource.id">
                            <youtube-player :videoId="resource.identifier"/>
                        </div>
                    </div>
                </template>

                <template v-if="material.files.data.length">
                    <h3 class="mb-3">Материалы:</h3>
                    <ul>
                        <li v-for="file in material.files.data" :key="file.id">
                            <a :href="'webapi/files/' + file.id">{{ file.original_name ? file.original_name : file.name }}</a> - {{ Math.round(file.size/1024) }} Kb
                        </li>
                    </ul>
                </template>
            </div>
        </div>
        
        <div class="card mt-4 mb-3 bg-dark text-light" v-for="test in tests" :key="'file_' + test.id">
            <div class="card-header pb-1"><h2>{{ test.name }}</h2></div>
            <div class="card-body">
                <p class="card-text">{{ test.description }}</p>
                <a :href="`/tests/${test.id}`" class="btn btn-light" target="_blank">Пройти тест</a>
            </div>
        </div>
    </div> 
</template>

<script src="./product.js"></script>
