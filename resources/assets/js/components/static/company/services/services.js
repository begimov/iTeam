export default {
    data() {
        return {
            active: 1
        }
    },
    computed: {
        //
    },
    methods: {
        setActive(value) {
            this.active = value
        },
        imgPath(value) {
            return '/img/company/services/services_0' + value + ((this.active === value) ? '_active.png' : '.png')
        }
    },
    mounted() {
        //
    }
};