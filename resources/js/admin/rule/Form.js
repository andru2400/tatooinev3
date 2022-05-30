import AppForm from '../app-components/Form/AppForm';

Vue.component('rule-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                validation_string:  '' ,
                
            }
        }
    }

});