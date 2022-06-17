import AppForm from '../app-components/Form/AppForm';

Vue.component('departament-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                country_id:  '' ,
                
            }
        }
    }

});