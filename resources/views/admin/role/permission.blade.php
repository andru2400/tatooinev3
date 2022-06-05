@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.role.actions.index'))

@section('body')

    <role-permission-listing
        :data="{{ $data }}"
        :url='"{{ url('admin/roles/{$data->id}/permissions') }}"'
        inline-template
        >

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.role.actions.permissions') }}
                        {{-- <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/roles/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.role.actions.create') }}</a> --}}
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="addPermission()">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Escriba nuevo permiso" v-model="newPermission"/>
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Agregar Permiso</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th is='sortable' :column="'permission_id'">{{ trans('admin.role.columns.id') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in data[0].permissions" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td>@{{ item.name }}</td>
                                        <td>
                                            <div class="row no-gutters">
                                                <form class="col" @submit.prevent="deleteItemById(data[0].id, item.id)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </role-permission-listing>

@endsection
