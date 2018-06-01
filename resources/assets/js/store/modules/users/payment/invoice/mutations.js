export default {
    setIsLoading (state, value) {
        state.isLoading = value
    },
    setBusinessEntities(state, data) {
        state.options.businessEntities = data
    },
    updateBusinessEntitiyId(state, id) {
        state.params.company.business_entity_id = id
    },
    updateCompanyName(state, name) {
        state.params.company.name = name
    },
    updateUsername(state, name) {
        state.params.user.name = name
    }
}
