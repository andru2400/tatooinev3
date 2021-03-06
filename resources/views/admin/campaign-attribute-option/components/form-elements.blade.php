<div class="form-group row align-items-center" :class="{'has-danger': errors.has('value'), 'has-success': fields.value && fields.value.valid }">
    <label for="value" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.campaign-attribute-option.columns.value') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.value" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('value'), 'form-control-success': fields.value && fields.value.valid}" id="value" name="value" placeholder="{{ trans('admin.campaign-attribute-option.columns.value') }}">
        <div v-if="errors.has('value')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('value') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('campaign_attribute_id'), 'has-success': fields.campaign_attribute_id && fields.campaign_attribute_id.valid }">
    <label for="campaign_attribute_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.campaign-attribute-option.columns.campaign_attribute_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.campaign_attribute_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('campaign_attribute_id'), 'form-control-success': fields.campaign_attribute_id && fields.campaign_attribute_id.valid}" id="campaign_attribute_id" name="campaign_attribute_id" placeholder="{{ trans('admin.campaign-attribute-option.columns.campaign_attribute_id') }}">
        <div v-if="errors.has('campaign_attribute_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('campaign_attribute_id') }}</div>
    </div>
</div>


