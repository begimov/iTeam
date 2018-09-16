import { mapActions, mapGetters } from 'vuex'

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
            answers: {}
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