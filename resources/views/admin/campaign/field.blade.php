@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.role.actions.index'))

@section('body')

<campaign-field-listing
    :url="'{{ url('admin/campaigns/'.$campaign->id.'/fields') }}'" {{-- Arreglar --}}
    :campaign="{{ $campaign }}"
    :campaignfield ="{{ $campaignfield }}"
    inline-template>

    <div>

        <div class="card-header">
            <i class="fa fa-align-justify"></i>  <span v-text="campaign.name"></span>  <i class="fa fa-arrow-right" aria-hidden="true"></i> Agregar Campos
            <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" :href="'/admin/campaigns/'" role="button"><i class="fa fa-angle-double-left"></i>&nbsp; volver</a>
        </div>

        <vue-bootstrap4-table :rows="{{ $data }}" :columns="columns" :config="config">
            <template slot="empty-results">
            No hay resultados para esta busqueda
            </template>
            <template slot="activated" slot-scope="props">
                <div v-if="checkExistField(props.row)">
                    <label class="switch switch-3d switch-success">
                        <input type="checkbox" v-model="props.row.activated" class="switch-input" checked="checked" @change="toggleSwitchPivot(props.row, props.row.activated)">
                        <span class="switch-slider"></span>
                    </label>
                    <div>
                        <a class="btn btn-sm btn-spinner btn-primary" :href="'/admin/campaigns/'+campaign.id+'/fields/'+props.row.id+'/rules'" title="Asignar Reglas al campo"><i class="fa fa-wrench"></i></a>
                    </div>
                </div>
                <div v-else>
                    <label class="switch switch-3d switch-success">
                        <input type="checkbox" v-model="props.row.activated" class="switch-input" @change="toggleSwitchPivot(props.row, props.row.activated)">
                        <span class="switch-slider"></span>
                    </label>
                </div>
            </template>
        </vue-bootstrap4-table>
    </div>

</campaign-field-listing>


@endsection
