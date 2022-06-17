@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.owner-location.actions.edit', ['name' => $ownerLocation->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <owner-location-form
                :action="'{{ $ownerLocation->resource_url }}'"
                :data="{{ $ownerLocation->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.owner-location.actions.edit', ['name' => $ownerLocation->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.owner-location.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </owner-location-form>

        </div>
    
</div>

@endsection