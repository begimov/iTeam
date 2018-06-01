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
    getCompanyName(state) {
        return state.params.company.name
    },
    getUsername(state) {
        return state.params.user.name
    },
}
