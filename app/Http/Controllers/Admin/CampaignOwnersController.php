<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CampaignOwner\BulkDestroyCampaignOwner;
use App\Http\Requests\Admin\CampaignOwner\DestroyCampaignOwner;
use App\Http\Requests\Admin\CampaignOwner\IndexCampaignOwner;
use App\Http\Requests\Admin\CampaignOwner\StoreCampaignOwner;
use App\Http\Requests\Admin\CampaignOwner\UpdateCampaignOwner;
use App\Models\CampaignOwner;
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

class CampaignOwnersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCampaignOwner $request
     * @return array|Factory|View
     */
    public function index(IndexCampaignOwner $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CampaignOwner::class)->processRequestAndGet(
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

        return view('admin.campaign-owner.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.campaign-owner.create');

        return view('admin.campaign-owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCampaignOwner $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCampaignOwner $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CampaignOwner
        $campaignOwner = CampaignOwner::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/campaign-owners'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/campaign-owners');
    }

    /**
     * Display the specified resource.
     *
     * @param CampaignOwner $campaignOwner
     * @throws AuthorizationException
     * @return void
     */
    public function show(CampaignOwner $campaignOwner)
    {
        $this->authorize('admin.campaign-owner.show', $campaignOwner);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CampaignOwner $campaignOwner
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CampaignOwner $campaignOwner)
    {
        $this->authorize('admin.campaign-owner.edit', $campaignOwner);


        return view('admin.campaign-owner.edit', [
            'campaignOwner' => $campaignOwner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCampaignOwner $request
     * @param CampaignOwner $campaignOwner
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCampaignOwner $request, CampaignOwner $campaignOwner)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CampaignOwner
        $campaignOwner->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/campaign-owners'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/campaign-owners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCampaignOwner $request
     * @param CampaignOwner $campaignOwner
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCampaignOwner $request, CampaignOwner $campaignOwner)
    {
        $campaignOwner->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCampaignOwner $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCampaignOwner $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CampaignOwner::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
