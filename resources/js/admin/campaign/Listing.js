import AppListing from '../app-components/Listing/AppListing';

Vue.component('campaign-listing', {
    mixins: [AppListing]
});

Vue.component('campaign-field-listing', {
    created: function(){
    //
    },
    props:['campaign','campaignfield'],
    data: function(){
        return {
            newField:'',
            columns: [
                {
                  label: "Nombre",
                  name: "name",
                  sort: true
                },
                // {
                //   label: "Tipo campo",
                //   name: "fieldtype.name",
                //   sort: false
                // },
                {
                  label: "Descripción",
                  name: "description",
                  sort: true
                },
                {
                  label: "Estado",
                  name: "activated",
                  sort: false
                }
              ],
              config: {
                card_mode:  false,
                checkbox_rows: false,
                rows_selectable: false,
                show_refresh_button: false,
                show_reset_button: false,
                global_search: {
                    placeholder: 'Buscar..'
                },
                per_page: 50,
              }
        }
    },
    methods:{
        deleteItemById: function(idCampaign, idField) {
            var _this7 = this;
            var service = '/admin/campaigns/'+idCampaign+'/fields/'+idField;
            console.log(idCampaign, idField, service)
            axios.delete(service).then(function (response) {
                _this7.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Item successfully deleted.' });
                location.reload();
            }, function (error) {
                _this7.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
                location.reload();
            });
        },
        addField: function(idObj){
            var service = '/admin/campaigns/'+this.campaign.id+'/fields/add';
            var formData = new FormData();
			formData.append("IdField", idObj);
            var self = this;
            axios.post(service,formData).then(function (response) {
                self.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Se agrego exitosamente' });
                location.reload();
            }, function (error) {
                self.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
                location.reload();
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


Vue.component('campaign-field-rule-listing', {
    created: function(){
    //
    },
    props:['campaign','field','campaignfieldrule','data'],
    data: function(){
        return {
            newField:''
        }
    },
    methods:{
        deleteItemById: function(idRule) {
            var _this7 = this;
            var service = '/admin/campaigns/'+this.campaign.id+'/fields/'+this.field.id+'/rules/'+idRule;
            axios.delete(service).then(function (response) {
                _this7.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Item successfully deleted.' });
                location.reload();
            }, function (error) {
                _this7.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
                location.reload();
            });
        },
        addRule: function(idObj){
            var service = '/admin/campaigns/'+this.campaign.id+'/fields/'+this.field.id+'/rules/add';
            var formData = new FormData();
			formData.append("IdRule", idObj);
            var self = this;
            axios.post(service,formData).then(function (response) {
                self.$notify({ type: 'success', title: 'Success!', text: response.data.message ? response.data.message : 'Se agrego exitosamente' });
                location.reload();
            }, function (error) {
                self.$notify({ type: 'error', title: 'Error!', text: error.response.data.message ? error.response.data.message : 'An error has occured.' });
                location.reload();
            });
        },
        checkExistRule: function(item){ /* Sirve para pintar Rules activos*/
            let exist = this.campaignfieldrule.find(element => element.rule_id == item.id);
            if(exist){
                return true;
            }else{
                return false;
            }
        },
        valuePivot: function(item){ /* Sirve para pintar Rules activos*/
            let exist = this.campaignfieldrule.find(element => element.rule_id == item.id);
            if(exist){
                if(exist.value == null){
                    return "No hay valor en la regla";
                }
                return exist.value;
            }else{
                return "-";
            }
        },
        toggleSwitchPivotP: function(objRule, action) {
            if(action == true){         // ADD
                this.addRule(objRule.id);
            }else{                      // DEL
                this.deleteItemById(objRule.id);
            }
        },
        show: function() {
            this.$modal.show('hello-world');
        },
        hide: function() {
            this.$modal.hide('hello-world');
        },
        close: function(){
            this.$modal.hide('hello-world');
        }
    }
});
