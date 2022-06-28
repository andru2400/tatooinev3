<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CampaignAttributeOption\BulkDestroyCampaignAttributeOption;
use App\Http\Requests\Admin\CampaignAttributeOption\DestroyCampaignAttributeOption;
use App\Http\Requests\Admin\CampaignAttributeOption\IndexCampaignAttributeOption;
use App\Http\Requests\Admin\CampaignAttributeOption\StoreCampaignAttributeOption;
use App\Http\Requests\Admin\CampaignAttributeOption\UpdateCampaignAttributeOption;
use App\Models\CampaignAttributeOption;
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

class CampaignAttributeOptionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCampaignAttributeOption $request
     * @return array|Factory|View
     */
    public function index(IndexCampaignAttributeOption $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CampaignAttributeOption::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'value', 'campaign_attribute_id'],

            // set columns to searchIn
            ['id', 'value']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.campaign-attribute-option.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.campaign-attribute-option.create');

        return view('admin.campaign-attribute-option.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCampaignAttributeOption $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCampaignAttributeOption $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CampaignAttributeOption
        $campaignAttributeOption = CampaignAttributeOption::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/campaign-attribute-options'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/campaign-attribute-options');
    }

    /**
     * Display the specified resource.
     *
     * @param CampaignAttributeOption $campaignAttributeOption
     * @throws AuthorizationException
     * @return void
     */
    public function show(CampaignAttributeOption $campaignAttributeOption)
    {
        $this->authorize('admin.campaign-attribute-option.show', $campaignAttributeOption);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CampaignAttributeOption $campaignAttributeOption
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CampaignAttributeOption $campaignAttributeOption)
    {
        $this->authorize('admin.campaign-attribute-option.edit', $campaignAttributeOption);


        return view('admin.campaign-attribute-option.edit', [
            'campaignAttributeOption' => $campaignAttributeOption,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCampaignAttributeOption $request
     * @param CampaignAttributeOption $campaignAttributeOption
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCampaignAttributeOption $request, CampaignAttributeOption $campaignAttributeOption)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CampaignAttributeOption
        $campaignAttributeOption->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/campaign-attribute-options'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/campaign-attribute-options');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCampaignAttributeOption $request
     * @param CampaignAttributeOption $campaignAttributeOption
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCampaignAttributeOption $request, CampaignAttributeOption $campaignAttributeOption)
    {
        $campaignAttributeOption->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCampaignAttributeOption $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCampaignAttributeOption $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CampaignAttributeOption::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
