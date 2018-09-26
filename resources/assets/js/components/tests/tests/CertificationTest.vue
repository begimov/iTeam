<template>
    <div class="col">
        <h1 class="mb-4">{{ test.name }}</h1>
        <h3 class="mb-4">{{ test.description }}</h3>

        <div class="row mt-3" v-for="question in test.testQuestions.data" :key="question.id">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">{{ question.question }}</h4>

                        <template v-if="question.multiple_choice">
                            <div class="form-check" v-for="answer in question.testAnswers.data" :key="answer.id">
                                <input class="form-check-input" type="checkbox" :value="answer.id" v-model="answers[question.id]">
                                <label class="form-check-label mt-1">
                                    {{ answer.answer }}
                                </label>
                            </div>
                        </template>

                        <template v-else>
                            <div class="form-check" v-for="answer in question.testAnswers.data" :key="answer.id">
                                <input class="form-check-input" type="radio" :value="answer.id" v-model="answers[question.id]">
                                <label class="form-check-label mt-1">
                                    {{ answer.answer }}
                                </label>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4" v-if="results">
            <div class="col">
                <div class="card bg-dark text-light">
                    <div class="card-body">
                        <h4 class="card-title">Ваши результаты</h4>
                        <h3><span class="badge badge-warning">Очков: {{ results.score }} из {{ results.maxScore }}</span></h3>
                        <h5 class="card-subtitle my-3">{{ conditionName }}</h5>
                        <p>{{ conditionDescription }}</p>
                        <p v-if="results.isCertified">
                            <a :href="`/webapi/tests/${testId}/results/${testResultId}/certificates/${testCertificateId}`" class="btn btn-success">
                                Скачать сертификат
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <a href="#" @click.prevent="sendAnswers" class="btn btn-primary">Узнать результаты</a>
            </div>
        </div>
    </div>
</template>

<script src="./certificationtest.js"></script>
