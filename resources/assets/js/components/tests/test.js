import { mapActions, mapGetters } from 'vuex'

export default {
    props: {
        testId: {
            type: Number,
            required: true
        }
    },
    computed: {
        ...mapGetters('tests/test', [
            'isLoading',
            'test',
            'selectedAnswers',
            'results',
        ]),
        'answers': {
            get () {
                return this.selectedAnswers
            },
            set (answers) {
                this.updateSelectedAnswers(answers)
            }
        },
    },
    methods: {
        ...mapActions('tests/test', [
            'getTest',
            'updateSelectedAnswers',
            'sendAnswers',
        ])
    },
    mounted() {
        this.getTest(this.testId)
    }
};