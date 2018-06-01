export default {
    isLoading(state) {
        return state.isLoading
    },
    businessEntities(state) {
        return state.options.businessEntities
    },
    getBusinessEntitiyId(state) {
        return state.params.company.business_entity_id
    },
}
