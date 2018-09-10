import { mapActions, mapGetters } from 'vuex'

export default {
    props: {
        test: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            answers: {
                15: []
            }
        }
    },
    mounted() {
        //
    }
};