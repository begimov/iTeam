export default {
    name: 'Ytplayer',
    props: {
        'videoId': {
            type: String,
            required: true
        },
        'bgImg': {
            type: String,
            default: '/img/home/btn_play.png'
        }
    },  
    data() {
        return {
            videoUrl: ''
        }
    },
    methods: {
        onOpen() {
            this.videoUrl = 'https://www.youtube.com/embed/' + this.videoId
        },
        onClose() {
            this.videoUrl = ''
        }
    },
    mounted() {
        //
    }
}