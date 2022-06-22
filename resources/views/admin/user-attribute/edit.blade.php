@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.user-attribute.actions.edit', ['name' => $userAttribute->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <user-attribute-form
                :action="'{{ $userAttribute->resource_url }}'"
                :data="{{ $userAttribute->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.user-attribute.actions.edit', ['name' => $userAttribute->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.user-attribute.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </user-attribute-form>

        </div>
    
</div>

@endsection