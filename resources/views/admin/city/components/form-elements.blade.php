<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.city.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.city.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('departament_id'), 'has-success': fields.departament_id && fields.departament_id.valid }">
    <label for="departament_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.city.columns.departament_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.departament_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('departament_id'), 'form-control-success': fields.departament_id && fields.departament_id.valid}" id="departament_id" name="departament_id" placeholder="{{ trans('admin.city.columns.departament_id') }}">
        <div v-if="errors.has('departament_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('departament_id') }}</div>
    </div>
</div>


