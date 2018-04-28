import axios from 'axios'

export default {
    name: 'FreeMagnet',
    props: {
        campaignToken: {
            type: String,
            required: true
        },
        buttonText: {
            type: String,
            default: 'ПОЛУЧИТЬ'
        },
        title: {
            type: String,
            default: 'Вам подарок!'
        },
        description: {
            type: String,
        },
        redirectUrl: {
            type: String,
            default: null
        },
    },
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
                this.resetState()

                if (this.redirectUrl) {
                    window.location.href = this.redirectUrl;
                }

                this.isLoading = false
            }).catch((err) => {
                this.errors = err.response.data.errors
                this.isLoading = false
            })
        },
        resetState() {
            _.each(this.params, (value, key) => {
                if (key !== 'campaignToken') {
                    this.params[key] = ''
                }
            })
            this.errors = {}
        }
    },
    computed: {
        //
    },
    mounted() {
        //
    }
}