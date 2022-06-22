import AppForm from '../app-components/Form/AppForm';

Vue.component('user-attribute-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                description:  '' ,
                islist:  false ,
                unique:  false ,
                required:  false ,
                status:  false ,
                
            }
        }
    }

});