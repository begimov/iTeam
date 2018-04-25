import axios from 'axios'

export default {
    name: 'FreeMagnet',
    props: [
        'campaignToken',
        'buttonText',
    ],
    data() {
        return {
            params: {
                name: '',
                email: '',
                phone: '',
                campaignToken: this.campaignToken
            },
            errors: {},
            isLoading: false
        }
    },
    methods: {
        register() {
            this.isLoading = true
            axios.post('/webapi/magnets/subscribe', this.params).then((response) => {
                //
                this.isLoading = false
            }).catch((err) => {
                this.errors = err.response.data.errors
                this.isLoading = false
            })
        }
    },
    computed: {
        //
    },
    mounted() {
        //
    }
}