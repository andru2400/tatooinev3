import AppListing from '../app-components/Listing/AppListing';

Vue.component('campaign-listing', {
    mixins: [AppListing]
});

Vue.component('campaign-field-listing', {
    mixins: [AppListing],
    created: function(){
    //
    },
    props:['campaign','campaignfield'],
    data: function(){
        return {
            newField:''
        }
    },
    methods:{
        deleteItemById: function(idCampaign, idField) {
            var _this7 = this;
            var service = '/admin/campaigns/'+idCampaign+'/fields/'+idField;
            console.log(idCampaign, idField, service)
            axios.delete(service).then(function (response) {
                _this7.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Item successfully deleted.' });
            }, function (error) {
                _this7.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
            });
        },
        addField: function(idObj){
            var service = '/admin/campaigns/'+this.campaign.id+'/fields/add';
            var formData = new FormData();
			formData.append("IdField", idObj);
            var self = this;
            axios.post(service,formData).then(function (response) {
                self.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Se agrego exitosamente' });
            }, function (error) {
                self.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
            });
        },
        checkExistField: function(item){ /* Sirve para pintar */
            let exist = this.campaignfield.find(element => element.field_id == item.id);
            if(exist){
                return true;
            }else{
                return false;
            }
        },
        toggleSwitchPivot: function(objField, action) {
            if(action == true){         // ADD
                this.addField(objField.id);
            }else{                      // DEL
                this.deleteItemById(this.campaign.id , objField.id);
            }
        },
    }
});
