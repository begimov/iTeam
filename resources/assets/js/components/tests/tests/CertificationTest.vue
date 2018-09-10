<template>
    <div class="col">
        <h1 class="mb-4">{{ test.name }}</h1>
        <h3 class="mb-4">{{ test.description }}</h3>

        <div class="row mt-3" v-for="question in test.testQuestions.data" :key="question.id">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">{{ question.question }}</h4>
                        <p v-for="answer in question.testAnswers.data" :key="answer.id">
                            {{ answer.answer }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./certificationtest.js"></script>
