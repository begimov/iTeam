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
        }
    },
    computed: {
        //
    },
    mounted() {
        $('#modal-window-' + this.modalWindowId).modal('show')
    }
}