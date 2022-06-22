@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.user-attribute-option.actions.edit', ['name' => $userAttributeOption->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <user-attribute-option-form
                :action="'{{ $userAttributeOption->resource_url }}'"
                :data="{{ $userAttributeOption->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.user-attribute-option.actions.edit', ['name' => $userAttributeOption->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.user-attribute-option.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </user-attribute-option-form>

        </div>
    
</div>

@endsection