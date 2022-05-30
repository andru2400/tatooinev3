import AppForm from '../app-components/Form/AppForm';

Vue.component('field-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                field_type_id:  '' ,
                description:  '' ,
                
            }
        }
    }

});