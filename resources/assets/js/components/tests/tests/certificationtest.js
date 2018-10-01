export default {
    props: {
        test: {
            type: Object,
            required: true
        },
        results: {
            type: Object,
            required: false,
            default: null
        }
    },
    data() {
        return {
            answers: {},
            name: ''
        }
    },
    watch: {
        answers: {
            handler: function (answers) {
                this.$emit('input', answers)
            },
            deep: true
        },
    },
    methods: {
        sendAnswers() {
            this.$emit('sendAnswers', this.answers)
        }
    },
    computed: {
        conditionName() {
            return this.results.condition.data.name
        },
        conditionDescription() {
            return this.results.condition.data.description
        },
        testId() {
            return this.results.testResult.data.test_id
        },
        testResultId() {
            return this.results.testResult.data.id
        },
        testCertificateId() {
            return this.results.testCertificate.data.id
        },
        resultPercents() {
            return _.round(this.results.score / this.results.maxScore * 100, 2)
        }
    },
    mounted() {
        _.forEach(this.test.testQuestions.data, (q) => {
            if (q.multiple_choice) {
                this.$set(this.answers, q.id, [])
            } else {
                this.$set(this.answers, q.id, null)
            }
        })
    }
};