import AppForm from '../app-components/Form/AppForm';

Vue.component('campaign-owner-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                status:  false ,
                
            }
        }
    }

});