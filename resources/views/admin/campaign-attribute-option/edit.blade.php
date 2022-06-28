@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.campaign-attribute-option.actions.edit', ['name' => $campaignAttributeOption->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <campaign-attribute-option-form
                :action="'{{ $campaignAttributeOption->resource_url }}'"
                :data="{{ $campaignAttributeOption->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.campaign-attribute-option.actions.edit', ['name' => $campaignAttributeOption->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.campaign-attribute-option.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </campaign-attribute-option-form>

        </div>
    
</div>

@endsection