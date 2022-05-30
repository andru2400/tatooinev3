import AppForm from '../app-components/Form/AppForm';

Vue.component('option-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                value:  '' ,
                
            }
        }
    }

});