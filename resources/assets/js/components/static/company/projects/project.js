export default {
    props: {
        project: {
            type: Object,
            required: true
        }
    },
    mounted () {
        console.log(this.project)
    }
}