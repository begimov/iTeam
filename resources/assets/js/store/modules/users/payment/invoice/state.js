export default {
    options: {
        businessEntities: [
            { id: 1, name: 'ООО' },
            { id: 2, name: 'ИП' }
        ]
    },
    params: {
        company: {
            name: '',
            business_entity_id: null
        },
        user: {
            name: ''
        },
        userProfile: {
            phone: ''
        }
    }
}
