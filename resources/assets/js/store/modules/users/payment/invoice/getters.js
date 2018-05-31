export default {
    businessEntities(state) {
        return state.options.businessEntities
    },
    getOpf(state) {
        return state.params.company.business_entity_id
    },
}
