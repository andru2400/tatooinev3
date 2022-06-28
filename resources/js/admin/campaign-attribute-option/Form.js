import AppForm from '../app-components/Form/AppForm';

Vue.component('campaign-attribute-option-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                value:  '' ,
                campaign_attribute_id:  '' ,
                
            }
        }
    }

});