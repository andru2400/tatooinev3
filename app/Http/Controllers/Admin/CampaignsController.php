<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Campaign\BulkDestroyCampaign;
use App\Http\Requests\Admin\Campaign\DestroyCampaign;
use App\Http\Requests\Admin\Campaign\IndexCampaign;
use App\Http\Requests\Admin\Campaign\StoreCampaign;
use App\Http\Requests\Admin\Campaign\UpdateCampaign;
use App\Models\Campaign;
use App\Models\Campaign_field;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use App\Models\Field;

class CampaignsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCampaign $request
     * @return array|Factory|View
     */
    public function index(IndexCampaign $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Campaign::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'status'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.campaign.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.campaign.create');
        $fields = Field::get();

        return view('admin.campaign.create', ['fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCampaign $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCampaign $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Campaign
        $campaign = Campaign::create($sanitized);

        // pivot options
        if ($request->input('options')) {
            $campaign->fields()->sync(collect($request->input('fields', []))->map->id->toArray());
        }

        if ($request->ajax()) {
            return ['redirect' => url('admin/campaigns'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/campaigns');
    }

    /**
     * Display the specified resource.
     *
     * @param Campaign $campaign
     * @throws AuthorizationException
     * @return void
     */
    public function show(Campaign $campaign)
    {
        $this->authorize('admin.campaign.show', $campaign);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Campaign $campaign
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Campaign $campaign)
    {
        $this->authorize('admin.campaign.edit', $campaign);
        $campaign->load('fields');
        $fields = Field::get();

        return view('admin.campaign.edit', [
            'campaign' => $campaign,
            'fields' => $fields
        ]);
    }

    public function fields(IndexCampaign $request,Campaign $campaign ){

        // create and AdminListing instance for a specific model and
         $data = AdminListing::create(Field::class)
         // ->modifyQuery(function($query){
         //     $query->with('roles');
         //  })
         ->get();
         // ->processRequestAndGet(
         //     // pass the request with params
         //     $request,

         //     // set columns to query
         //     ['id', 'name', 'guard_name'],

         //     // set columns to searchIn
         //     ['id', 'name', 'guard_name']
         // );

         $campaignfield = Campaign_field::where('campaign_id', $campaign->id)->get();

         return view('admin.campaign.field', [
             'data' => $data,
             'campaign' => $campaign,
             'campaignfield' => $campaignfield,
         ]);
    }


    public function fieldDestroy(Campaign $campaign,Field $field){

        DB::table('campaign_field')
        ->where('field_id',$field->id)
        ->where('campaign_id',$campaign->id)
        ->delete();

        // if ($request->ajax()) {
        return response(['message' => 'Se quito el campo']);
        // }
    }

    public function addFields(Campaign $campaign, IndexCampaign $request){
        $field_temp = Field::where('id',$request->IdField)->first();
        if($field_temp){
            try {
                $campaign->fields()->attach($field_temp->id);
                if ($request->ajax()) {
                    return ['message' => 'Se agrego exitosamente'];
                }
                return redirect()->back();
            } catch (\Throwable $th) {
                if ($request->ajax()) {
                    abort(409, 'El campo ingresado ya existe');
                }
                return redirect()->back();
            }
        }else{
            if ($request->ajax()) {
                abort(400, 'El campo ingresado no existe');
            }
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCampaign $request
     * @param Campaign $campaign
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCampaign $request, Campaign $campaign)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Campaign
        $campaign->update($sanitized);

        // pivot options
        if ($request->input('options')) {
            $campaign->fields()->sync(collect($request->input('fields', []))->map->id->toArray());
        }

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/campaigns'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/campaigns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCampaign $request
     * @param Campaign $campaign
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCampaign $request, Campaign $campaign)
    {
        $campaign->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCampaign $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCampaign $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Campaign::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
