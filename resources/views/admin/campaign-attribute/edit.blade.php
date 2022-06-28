@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.campaign-attribute.actions.edit', ['name' => $campaignAttribute->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <campaign-attribute-form
                :action="'{{ $campaignAttribute->resource_url }}'"
                :data="{{ $campaignAttribute->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.campaign-attribute.actions.edit', ['name' => $campaignAttribute->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.campaign-attribute.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </campaign-attribute-form>

        </div>
    
</div>

@endsection