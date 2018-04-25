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
            isLoading: false
        }
    },
    methods: {
        register() {
            this.isLoading = true
            axios.get('https://iteam.ru/grform', this.params).then((response) => {
                //
                this.isLoading = false
            }).catch((error) => {
                //
                this.isLoading = false
            })
        }
    },
    mounted() {
        //
    }
}