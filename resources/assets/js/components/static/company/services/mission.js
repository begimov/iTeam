export default {
    data() {
        return {
            active: 'mission'
        }
    },
    computed: {
        //
    },
    methods: {
        switchActive() {
            this.active = (this.active === 'mission') ? 'philosophy' : 'mission'
        }
    },
    mounted() {
        //
    }
};