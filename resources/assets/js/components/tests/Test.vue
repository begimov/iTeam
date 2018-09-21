<template>
    <div class="container">
        <div v-bind:class="{ 'isActive': isLoading, 'loader': true, 'loader-def': true }"></div>

        <div class="row" v-if="test && test.testType.data.id == 1">
            <certification-test :test="test" v-model="answers" @sendAnswers="sendAnswers" :results="results"/>
        </div>
            
    </div>
</template>

<script src="./test.js"></script>
