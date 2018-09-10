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
        ])
    },
    methods: {
        // ...mapActions('users/dashboard', [
        //     'getOrders',
        // ])
    },
    mounted() {
        // this.getTest(testId)
    }
};