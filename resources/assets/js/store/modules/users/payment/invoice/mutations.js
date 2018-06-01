export default {
    setBusinessEntities(state, data) {
        state.options.businessEntities = data
    },
    updateBusinessEntitiyId(state, id) {
        state.params.company.business_entity_id = id
    }
}
