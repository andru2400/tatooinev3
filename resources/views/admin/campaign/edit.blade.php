@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.campaign.actions.edit', ['name' => $campaign->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <campaign-form
                :action="'{{ $campaign->resource_url }}'"
                :data="{{ $campaign->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.campaign.actions.edit', ['name' => $campaign->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.campaign.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </campaign-form>

        </div>
    
</div>

@endsection