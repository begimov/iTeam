export default {
    props: ['order'],
    computed: {
        //
    },
    methods: {
        close() {
            console.log('closed')
        }
    },
    mounted() {
        console.log(this.order)
    }
};