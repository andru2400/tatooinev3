<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserAttributeOption\BulkDestroyUserAttributeOption;
use App\Http\Requests\Admin\UserAttributeOption\DestroyUserAttributeOption;
use App\Http\Requests\Admin\UserAttributeOption\IndexUserAttributeOption;
use App\Http\Requests\Admin\UserAttributeOption\StoreUserAttributeOption;
use App\Http\Requests\Admin\UserAttributeOption\UpdateUserAttributeOption;
use App\Models\UserAttribute;
use App\Models\UserAttributeOption;
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

class UserAttributeOptionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUserAttributeOption $request
     * @return array|Factory|View
     */
    public function index(IndexUserAttributeOption $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(UserAttributeOption::class)
        ->modifyQuery(function($query){
            $query->with('user_attribute');
         })
        ->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'value', 'user_attribute_id'],

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

        return view('admin.user-attribute-option.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.user-attribute-option.create');
        $user_attributes = UserAttribute::get();

        return view('admin.user-attribute-option.create',['user_attributes' => $user_attributes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserAttributeOption $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUserAttributeOption $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the UserAttributeOption
        $userAttributeOption = UserAttributeOption::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/user-attribute-options'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/user-attribute-options');
    }

    /**
     * Display the specified resource.
     *
     * @param UserAttributeOption $userAttributeOption
     * @throws AuthorizationException
     * @return void
     */
    public function show(UserAttributeOption $userAttributeOption)
    {
        $this->authorize('admin.user-attribute-option.show', $userAttributeOption);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserAttributeOption $userAttributeOption
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(UserAttributeOption $userAttributeOption)
    {
        $this->authorize('admin.user-attribute-option.edit', $userAttributeOption);
        $userAttributeOption->user_attribute_id = (string)$userAttributeOption->user_attribute_id;
        $user_attributes = UserAttribute::get();

        return view('admin.user-attribute-option.edit', [
            'userAttributeOption' => $userAttributeOption,
            'user_attributes' => $user_attributes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserAttributeOption $request
     * @param UserAttributeOption $userAttributeOption
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUserAttributeOption $request, UserAttributeOption $userAttributeOption)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values UserAttributeOption
        $userAttributeOption->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/user-attribute-options'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/user-attribute-options');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUserAttributeOption $request
     * @param UserAttributeOption $userAttributeOption
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUserAttributeOption $request, UserAttributeOption $userAttributeOption)
    {
        $userAttributeOption->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUserAttributeOption $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUserAttributeOption $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    UserAttributeOption::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
