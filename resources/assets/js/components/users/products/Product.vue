<template>
    <div class="col-md-12" v-if="order">
        <h1>{{ product.name }}</h1>
        <div v-for="material in materials" :key="material.id">
            <h2>{{ material.name }}</h2>
            <span v-for="file in material.files.data" :key="file.id">
                <a :href="'files/materials/id_' + material.id + '/' + file.name" download>{{ file.name }}</a> - {{ Math.round(file.size/1024) }} Kb
            </span>
        </div>
    </div> 
</template>

<script src="./product.js"></script>
