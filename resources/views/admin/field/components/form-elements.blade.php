<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.field.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.field.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>


{{-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('field_type_id'), 'has-success': fields.field_type_id && fields.field_type_id.valid }">
    <label for="field_type_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.field.columns.field_type_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect v-model="form.field_type_id" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_an_option') }}" :options="{{ $field_types->toJson() }}" open-direction="bottom"></multiselect>
        <div v-if="errors.has('field_types')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('field_types') }}</div>
    </div>
</div> --}}


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.field.columns.description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.field.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

{{-- ok --}}
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('field_type_id'), 'has-success': fields.field_type_id && fields.field_type_id.valid }">
    <label for="field_type_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.field.columns.field_type_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{-- <input type="text" v-model="form.field_type_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('field_type_id'), 'form-control-success': fields.field_type_id && fields.field_type_id.valid}" id="field_type_id" name="field_type_id" placeholder="{{ trans('admin.field.columns.field_type_id') }}"> --}}
        <select v-model="form.field_type_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('field_type_id'), 'form-control-success': fields.field_type_id && fields.field_type_id.valid}" id="field_type_id" name="field_type_id">
                <option disabled value="">Seleccione ...</option>
            @foreach($field_types as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <div v-if="errors.has('field_type_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('field_type_id') }}</div>
    </div>
</div>

{{-- ok --}}
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('options'), 'has-success': fields.options && fields.options.valid }">
    <label for="options" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.field.columns.options') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{-- <multiselect v-model="form.options" disabled placeholder="{{ trans('brackets/admin-ui::admin.forms.select_options') }}" label="name" track-by="id" :options="{{ $options->toJson() }}" :multiple="true" open-direction="bottom"></multiselect> --}}
        <div v-if="errors.has('options')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('options') }}</div>
        <div v-for="option in form.options">
           <label> @{{ option.name }}</label>
        </div>
    </div>
</div>


