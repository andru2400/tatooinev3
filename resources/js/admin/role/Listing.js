import AppListing from '../app-components/Listing/AppListing';

Vue.component('role-listing', {
    mixins: [AppListing]
});

Vue.component('role-permission-listing', {
    mixins: [AppListing],
    created: function(){
    //
    },
    props:['role','rolepermission'],
    data: function(){
        return {
            newPermission:''
        }
    },
    methods:{
        deleteItemById: function(idRole, idPermission) {
            var _this7 = this;
            var service = '/admin/roles/'+idRole+'/permissions/'+idPermission;
            axios.delete(service).then(function (response) {
                // location.reload();
                // _this7.loadData();
                _this7.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Item successfully deleted.' });
            }, function (error) {
                _this7.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
            });
            // this.$modal.show('dialog', {
            //     title: 'Warning!',
            //     text: 'Do you really want to delete this item?',
            //     buttons: [{ title: 'No, cancel.' }, {
            //         title: '<span class="btn-dialog btn-danger">Yes, delete.<span>',
            //         handler: function handler() {
            //             _this7.$modal.hide('dialog');
            //         }
            //     }]
            // });
        },
        addPermission: function(name){
            var service = '/admin/roles/'+this.role.id+'/permissions/add';
            var formData = new FormData();
			formData.append("namePermission", name);
            var self = this;
            axios.post(service,formData).then(function (response) {
                self.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Se agrego exitosamente' });
            }, function (error) {
                self.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
            });
        },
        checkExistRole: function(item){ /* Sirve para pintar */
            let exist = this.rolepermission.find(element => element.permission_id == item.id);
            if(exist){
                return true;
            }else{
                return false;
            }
        },
        toggleSwitchPivot: function(objPermission, action) {
            if(action == true){         // ADD
                this.addPermission(objPermission.name);
            }else{                      // DEL
                this.deleteItemById(this.role.id , objPermission.id);
            }
        },
    }
});
