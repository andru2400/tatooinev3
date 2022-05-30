<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rule.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.rule.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('validation_string'), 'has-success': fields.validation_string && fields.validation_string.valid }">
    <label for="validation_string" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rule.columns.validation_string') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.validation_string" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('validation_string'), 'form-control-success': fields.validation_string && fields.validation_string.valid}" id="validation_string" name="validation_string" placeholder="{{ trans('admin.rule.columns.validation_string') }}">
        <div v-if="errors.has('validation_string')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('validation_string') }}</div>
    </div>
</div>


