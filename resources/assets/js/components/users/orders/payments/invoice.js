import { mapActions, mapGetters } from 'vuex'

export default {
    props: ['order'],
    computed: {
        ...mapGetters('users/payment/invoice', [
            'isLoading',
            'businessEntities',
            'getBusinessEntitiyId',
            'getCompanyName',
            'getUsername',
            'getPhone',
            'errors'
        ]),
        'businessEntitiyId': {
            get () {
              return this.getBusinessEntitiyId
            },
            set (id) {
              this.updateBusinessEntitiyId(id)
            }
        },
        'companyName': {
            get () {
              return this.getCompanyName
            },
            set (name) {
              this.updateCompanyName(name)
            }
        },
        'username': {
            get () {
              return this.getUsername
            },
            set (name) {
              this.updateUsername(name)
            }
        },
        'phone': {
            get () {
              return this.getPhone
            },
            set (num) {
              this.updatePhone(num)
            }
        }
    },
    methods: {
        ...mapActions('users/payment/invoice', [
            'getInitialData',
            'updateBusinessEntitiyId',
            'updateCompanyName',
            'updateUsername',
            'updatePhone',
            'getInvoice'
        ]),
        generateInvoice() {
            this.getInvoice(this.order.id)
        }
    },
    mounted() {
        this.getInitialData()
    }
};