import AppForm from '../app-components/Form/AppForm';

Vue.component('user-attribute-option-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                value:  '' ,
                user_attribute_id:  '' ,
                
            }
        }
    }

});