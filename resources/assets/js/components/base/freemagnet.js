import axios from 'axios'

export default {
    name: 'FreeMagnet',
    props: {
        layoutType: {
            type: String,
            default: 'vertical'
        },
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
        noPhone: {
            type: String,
            default: null
        },
        userEmail: {
            type: String,
            default: null
        },
        userName: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            params: {
                name: this.userName ? this.userName : '',
                email: this.userEmail ? this.userEmail : '',
                phone: !this.noPhone ? '' : 'none',
                campaignToken: this.campaignToken
            },
            errors: {},
            message: '',
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
                } else {
                    this.message = 'Спасибо, регистрация прошла успешно! На ваш адрес отправлено письмо.<br>Напишие на <a href="mailto:info@iteam.ru">info@iteam.ru</a>, если письмо не пришло!'
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
            this.message = ''
        }
    },
    computed: {
        //
    },
    mounted() {
        //
    }
}