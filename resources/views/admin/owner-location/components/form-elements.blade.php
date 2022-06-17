<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.owner-location.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.owner-location.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('campaign_owner_id'), 'has-success': fields.campaign_owner_id && fields.campaign_owner_id.valid }">
    <label for="campaign_owner_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.owner-location.columns.campaign_owner_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.campaign_owner_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('campaign_owner_id'), 'form-control-success': fields.campaign_owner_id && fields.campaign_owner_id.valid}" id="campaign_owner_id" name="campaign_owner_id" placeholder="{{ trans('admin.owner-location.columns.campaign_owner_id') }}">
        <div v-if="errors.has('campaign_owner_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('campaign_owner_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('city_id'), 'has-success': fields.city_id && fields.city_id.valid }">
    <label for="city_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.owner-location.columns.city_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.city_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('city_id'), 'form-control-success': fields.city_id && fields.city_id.valid}" id="city_id" name="city_id" placeholder="{{ trans('admin.owner-location.columns.city_id') }}">
        <div v-if="errors.has('city_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('city_id') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="status" type="checkbox" v-model="form.status" v-validate="''" data-vv-name="status"  name="status_fake_element">
        <label class="form-check-label" for="status">
            {{ trans('admin.owner-location.columns.status') }}
        </label>
        <input type="hidden" name="status" :value="form.status">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


