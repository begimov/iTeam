<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>

        <div class="row" v-if="test.testType.data.id == 1">
            <div class="col">
                <h1 class="mb-4">{{ test }}</h1>
            </div>
        </div>
            
    </div>
</template>

<script src="./test.js"></script>
