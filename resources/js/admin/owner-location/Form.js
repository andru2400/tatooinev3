import AppForm from '../app-components/Form/AppForm';

Vue.component('owner-location-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                campaign_owner_id:  '' ,
                city_id:  '' ,
                status:  false ,
                
            }
        }
    }

});