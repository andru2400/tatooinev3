<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.user-attribute.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.user-attribute.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.user-attribute.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.user-attribute.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('islist'), 'has-success': fields.islist && fields.islist.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="islist" type="checkbox" v-model="form.islist" v-validate="''" data-vv-name="islist"  name="islist_fake_element">
        <label class="form-check-label" for="islist">
            {{ trans('admin.user-attribute.columns.islist') }}
        </label>
        <input type="hidden" name="islist" :value="form.islist">
        <div v-if="errors.has('islist')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('islist') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('unique'), 'has-success': fields.unique && fields.unique.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="unique" type="checkbox" v-model="form.unique" v-validate="''" data-vv-name="unique"  name="unique_fake_element">
        <label class="form-check-label" for="unique">
            {{ trans('admin.user-attribute.columns.unique') }}
        </label>
        <input type="hidden" name="unique" :value="form.unique">
        <div v-if="errors.has('unique')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('unique') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('required'), 'has-success': fields.required && fields.required.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="required" type="checkbox" v-model="form.required" v-validate="''" data-vv-name="required"  name="required_fake_element">
        <label class="form-check-label" for="required">
            {{ trans('admin.user-attribute.columns.required') }}
        </label>
        <input type="hidden" name="required" :value="form.required">
        <div v-if="errors.has('required')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('required') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="status" type="checkbox" v-model="form.status" v-validate="''" data-vv-name="status"  name="status_fake_element">
        <label class="form-check-label" for="status">
            {{ trans('admin.user-attribute.columns.status') }}
        </label>
        <input type="hidden" name="status" :value="form.status">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


