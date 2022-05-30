@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.rule.actions.edit', ['name' => $rule->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <rule-form
                :action="'{{ $rule->resource_url }}'"
                :data="{{ $rule->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.rule.actions.edit', ['name' => $rule->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.rule.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </rule-form>

        </div>
    
</div>

@endsection