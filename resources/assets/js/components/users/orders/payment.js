import $ from 'jquery';

export default {
    props: ['order'],
    computed: {
        //
    },
    methods: {
        //
    },
    mounted() {
        $(document).ready(
            function() {
                $("#exampleModal").modal('toggle')
            }
        )
    }
};