import axios from 'axios'

export default {
    name: 'FreeMagnet',
    props: {
        campaignToken: {
            required: true
        },
        buttonText: {
            default: 'ПОЛУЧИТЬ'
        }
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