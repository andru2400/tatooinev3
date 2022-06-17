<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.departament.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.departament.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country_id'), 'has-success': fields.country_id && fields.country_id.valid }">
    <label for="country_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.departament.columns.country_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.country_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country_id'), 'form-control-success': fields.country_id && fields.country_id.valid}" id="country_id" name="country_id" placeholder="{{ trans('admin.departament.columns.country_id') }}">
        <div v-if="errors.has('country_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country_id') }}</div>
    </div>
</div>


