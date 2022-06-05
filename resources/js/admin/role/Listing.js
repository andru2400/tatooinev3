import AppListing from '../app-components/Listing/AppListing';

Vue.component('role-listing', {
    mixins: [AppListing]
});

Vue.component('role-permission-listing', {
    mixins: [AppListing],
    created: function(){
    //
    },
    methods:{
        deleteItemById: function(idRole, idPermission) {
            var _this7 = this;
            this.$modal.show('dialog', {
                title: 'Warning!',
                text: 'Do you really want to delete this item?',
                buttons: [{ title: 'No, cancel.' }, {
                    title: '<span class="btn-dialog btn-danger">Yes, delete.<span>',
                    handler: function handler() {
                        _this7.$modal.hide('dialog');
                        var service = '/admin/roles/'+idRole+'/permissions/'+idPermission;
                        axios.delete(service).then(function (response) {
                            location.reload();
                            // _this7.loadData();
                            // _this7.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Item successfully deleted.' });
                        }, function (error) {
                            _this7.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
                        });
                    }
                }]
            });
        },
    }
});
