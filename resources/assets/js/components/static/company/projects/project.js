export default {
    props: {
        project: {
            type: Object,
            required: true
        }
    },
    data () {
        return {
            areShown: false
        }
    },
    methods: {
        more () {
            this.areShown = !this.areShown
        }
    }
}