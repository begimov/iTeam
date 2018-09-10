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
        ])
    },
    methods: {
        ...mapActions('tests/test', [
            'getTest',
        ])
    },
    mounted() {
        this.getTest(this.testId)
    }
};