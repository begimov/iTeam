import { mapActions, mapGetters } from 'vuex'

export default {
    props: {
        test: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            answers: {}
        }
    },
    watch: {
        answers: {
            handler: function (answers) {
                this.$emit('input', answers);
            },
            deep: true
        },
    },
    mounted() {
        _.forEach(this.test.testQuestions.data, (q) => {
            if (q.multiple_choice) {
                this.$set(this.answers, q.id, [])
            }
        })
    }
};