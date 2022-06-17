<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OwnerLocation\BulkDestroyOwnerLocation;
use App\Http\Requests\Admin\OwnerLocation\DestroyOwnerLocation;
use App\Http\Requests\Admin\OwnerLocation\IndexOwnerLocation;
use App\Http\Requests\Admin\OwnerLocation\StoreOwnerLocation;
use App\Http\Requests\Admin\OwnerLocation\UpdateOwnerLocation;
use App\Models\OwnerLocation;
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

class OwnerLocationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexOwnerLocation $request
     * @return array|Factory|View
     */
    public function index(IndexOwnerLocation $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(OwnerLocation::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'campaign_owner_id', 'city_id', 'status'],

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

        return view('admin.owner-location.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.owner-location.create');

        return view('admin.owner-location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOwnerLocation $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreOwnerLocation $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the OwnerLocation
        $ownerLocation = OwnerLocation::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/owner-locations'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/owner-locations');
    }

    /**
     * Display the specified resource.
     *
     * @param OwnerLocation $ownerLocation
     * @throws AuthorizationException
     * @return void
     */
    public function show(OwnerLocation $ownerLocation)
    {
        $this->authorize('admin.owner-location.show', $ownerLocation);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param OwnerLocation $ownerLocation
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(OwnerLocation $ownerLocation)
    {
        $this->authorize('admin.owner-location.edit', $ownerLocation);


        return view('admin.owner-location.edit', [
            'ownerLocation' => $ownerLocation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOwnerLocation $request
     * @param OwnerLocation $ownerLocation
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateOwnerLocation $request, OwnerLocation $ownerLocation)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values OwnerLocation
        $ownerLocation->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/owner-locations'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/owner-locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyOwnerLocation $request
     * @param OwnerLocation $ownerLocation
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyOwnerLocation $request, OwnerLocation $ownerLocation)
    {
        $ownerLocation->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyOwnerLocation $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyOwnerLocation $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    OwnerLocation::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
