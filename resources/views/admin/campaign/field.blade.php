@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.role.actions.index'))

@section('body')

<campaign-field-listing
    :data="{{ $data->toJson() }}"
    :campaign="{{ $campaign }}"
    :campaignfield ="{{ $campaignfield }}"
    :url="'{{ url('admin/campaigns/'.$campaign->id.'/fields') }}'" {{-- Arreglar --}}
    inline-template>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Campos usados en la campaña <span v-text="campaign.name"></span>
                </div>
                <div class="card-body" v-cloak>
                    <div class="card-block">
                        <form @submit.prevent="">
                            <div class="row justify-content-md-between">
                                <div class="col col-lg-7 col-xl-5 form-group">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-auto form-group ">
                                    <select class="form-control" v-model="pagination.state.per_page">

                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="100">100</option>
                                    </select>
                                </div> --}}
                            </div>
                        </form>

                        <table class="table table-hover table-listing">
                            <thead>
                                <tr>
                                    {{-- <th class="bulk-checkbox">
                                        <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                        <label class="form-check-label" for="enabled">
                                            #
                                        </label>
                                    </th> --}}

                                    {{-- <th is='sortable' :column="'id'">{{ trans('admin.permission.columns.id') }}</th> --}}
                                    <th is='sortable' :column="'name'">{{ trans('admin.campaign.columns.name') }}</th>
                                    <th is='sortable' class="d-flex justify-content-end">Estado</th>

                                </tr>
                                {{-- <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                    <td class="bg-bulk-info d-table-cell text-center" colspan="5">
                                        <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/permissions')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                    href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                        <span class="pull-right pr-2">
                                            <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/permissions/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                        </span>

                                    </td>
                                </tr> --}}
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in data" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                    {{-- <td class="bulk-checkbox">
                                        <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                        <label class="form-check-label" :for="'enabled' + item.id">
                                        </label>
                                    </td> --}}

                                    {{-- <td>@{{ item.id }}</td> --}}
                                    <td>@{{ item.name }}</td>

                                    <td v-if="checkExistField(item)">
                                        <label class="switch switch-3d switch-success">
                                            <input type="checkbox" v-model="data[index].activated" class="switch-input" checked="checked" @change="toggleSwitchPivot(item, data[index].activated)">
                                            <span class="switch-slider"></span>
                                        </label>
                                        <div class="col-auto">
                                            <a class="btn btn-sm btn-spinner btn-primary" :href="'/admin/campaigns/'+campaign.id+'/fields/'+item.id+'/rules'" title="Asignar Reglas al campo"><i class="fa fa-wrench"></i></a>
                                        </div>
                                    </td>
                                    <td v-else>
                                        <label class="switch switch-3d switch-success">
                                            <input type="checkbox" v-model="data[index].activated" class="switch-input" @change="toggleSwitchPivot(item, data[index].activated)">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </td>
                                    {{-- <div class="row no-gutters">
                                        <label class="switch switch-3d switch-success">
                                            <input type="checkbox" class="switch-input" v-model="collection[index].activated"  @change="toggleSwitchPivot(item)">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </div> --}}

                                    {{-- <td v-if="activation">
                                        <label class="switch switch-3d switch-success">
                                            <input type="checkbox" class="switch-input" v-model="collection[index].activated" @change="toggleSwitch(item.resource_url, 'activated', collection[index])">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </td>
                                    <td >
                                        <label class="switch switch-3d switch-danger">
                                            <input type="checkbox" class="switch-input" v-model="collection[index].forbidden" @change="toggleSwitch(item.resource_url, 'forbidden', collection[index])">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>

                        {{-- <div class="row" v-if="pagination.state.total > 0">
                            <div class="col-sm">
                                <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                            </div>
                            <div class="col-sm-auto">
                                <pagination></pagination>
                            </div>
                        </div>

                        <div class="no-items-found" v-if="!collection.length > 0">
                            <i class="icon-magnifier"></i>
                            <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                            <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                            <a class="btn btn-primary btn-spinner" href="{{ url('admin/permissions/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.permission.actions.create') }}</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</campaign-field-listing>

@endsection
