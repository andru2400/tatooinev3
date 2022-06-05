import AppListing from '../app-components/Listing/AppListing';

Vue.component('role-listing', {
    mixins: [AppListing]
});

Vue.component('role-permission-listing', {
    mixins: [AppListing],
    created: function(){
    //
    }
});
