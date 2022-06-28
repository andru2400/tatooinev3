<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CampaignAttribute\BulkDestroyCampaignAttribute;
use App\Http\Requests\Admin\CampaignAttribute\DestroyCampaignAttribute;
use App\Http\Requests\Admin\CampaignAttribute\IndexCampaignAttribute;
use App\Http\Requests\Admin\CampaignAttribute\StoreCampaignAttribute;
use App\Http\Requests\Admin\CampaignAttribute\UpdateCampaignAttribute;
use App\Models\CampaignAttribute;
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

class CampaignAttributesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCampaignAttribute $request
     * @return array|Factory|View
     */
    public function index(IndexCampaignAttribute $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CampaignAttribute::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'description', 'islist', 'unique', 'required', 'status'],

            // set columns to searchIn
            ['id', 'name', 'description']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.campaign-attribute.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.campaign-attribute.create');

        return view('admin.campaign-attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCampaignAttribute $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCampaignAttribute $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CampaignAttribute
        $campaignAttribute = CampaignAttribute::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/campaign-attributes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/campaign-attributes');
    }

    /**
     * Display the specified resource.
     *
     * @param CampaignAttribute $campaignAttribute
     * @throws AuthorizationException
     * @return void
     */
    public function show(CampaignAttribute $campaignAttribute)
    {
        $this->authorize('admin.campaign-attribute.show', $campaignAttribute);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CampaignAttribute $campaignAttribute
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CampaignAttribute $campaignAttribute)
    {
        $this->authorize('admin.campaign-attribute.edit', $campaignAttribute);


        return view('admin.campaign-attribute.edit', [
            'campaignAttribute' => $campaignAttribute,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCampaignAttribute $request
     * @param CampaignAttribute $campaignAttribute
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCampaignAttribute $request, CampaignAttribute $campaignAttribute)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CampaignAttribute
        $campaignAttribute->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/campaign-attributes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/campaign-attributes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCampaignAttribute $request
     * @param CampaignAttribute $campaignAttribute
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCampaignAttribute $request, CampaignAttribute $campaignAttribute)
    {
        $campaignAttribute->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCampaignAttribute $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCampaignAttribute $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CampaignAttribute::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
