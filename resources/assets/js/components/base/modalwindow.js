import Cookies from 'js-cookie'

export default {
    name: 'ModalWindow',
    props: {
        campaignToken: {
            type: String,
            required: false,
            default: ''
        },
        modalWindowId: {
            required: true,
            type: String
        },
        redirectUrl: {
            type: String,
            required: false,
            default: ''
        }
    },
    computed: {
        //
    },
    mounted() {
        if (!Cookies.get('book-modal-viewed')) {

            Cookies.set('book-modal-viewed', '1', { expires: 1 })

            $('#modal-window-' + this.modalWindowId).modal('show')
        }
    }
}