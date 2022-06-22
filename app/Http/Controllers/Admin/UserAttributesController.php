<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserAttribute\BulkDestroyUserAttribute;
use App\Http\Requests\Admin\UserAttribute\DestroyUserAttribute;
use App\Http\Requests\Admin\UserAttribute\IndexUserAttribute;
use App\Http\Requests\Admin\UserAttribute\StoreUserAttribute;
use App\Http\Requests\Admin\UserAttribute\UpdateUserAttribute;
use App\Models\UserAttribute;
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

class UserAttributesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUserAttribute $request
     * @return array|Factory|View
     */
    public function index(IndexUserAttribute $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(UserAttribute::class)->processRequestAndGet(
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

        return view('admin.user-attribute.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.user-attribute.create');

        return view('admin.user-attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserAttribute $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUserAttribute $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the UserAttribute
        $userAttribute = UserAttribute::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/user-attributes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/user-attributes');
    }

    /**
     * Display the specified resource.
     *
     * @param UserAttribute $userAttribute
     * @throws AuthorizationException
     * @return void
     */
    public function show(UserAttribute $userAttribute)
    {
        $this->authorize('admin.user-attribute.show', $userAttribute);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserAttribute $userAttribute
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(UserAttribute $userAttribute)
    {
        $this->authorize('admin.user-attribute.edit', $userAttribute);


        return view('admin.user-attribute.edit', [
            'userAttribute' => $userAttribute,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserAttribute $request
     * @param UserAttribute $userAttribute
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUserAttribute $request, UserAttribute $userAttribute)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values UserAttribute
        $userAttribute->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/user-attributes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/user-attributes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUserAttribute $request
     * @param UserAttribute $userAttribute
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUserAttribute $request, UserAttribute $userAttribute)
    {
        $userAttribute->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUserAttribute $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUserAttribute $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    UserAttribute::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
