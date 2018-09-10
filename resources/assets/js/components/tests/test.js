import { mapActions, mapGetters } from 'vuex'

export default {
    props: {
        testId: {
            type: Number,
            required: true
        }
    },
    computed: {
        // ...mapGetters('users/dashboard', [
        //     'isLoading',
        // ])
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