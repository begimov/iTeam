export default {
    name: 'ModalWindow',
    props: {
        campaignToken: {
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
        $('#magnet' + this.modalWindowId).modal('show')
    }
}