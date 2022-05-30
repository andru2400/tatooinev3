<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FieldType\BulkDestroyFieldType;
use App\Http\Requests\Admin\FieldType\DestroyFieldType;
use App\Http\Requests\Admin\FieldType\IndexFieldType;
use App\Http\Requests\Admin\FieldType\StoreFieldType;
use App\Http\Requests\Admin\FieldType\UpdateFieldType;
use App\Models\FieldType;
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

class FieldTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexFieldType $request
     * @return array|Factory|View
     */
    public function index(IndexFieldType $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(FieldType::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'description'],

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

        return view('admin.field-type.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.field-type.create');

        return view('admin.field-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFieldType $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreFieldType $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the FieldType
        $fieldType = FieldType::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/field-types'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/field-types');
    }

    /**
     * Display the specified resource.
     *
     * @param FieldType $fieldType
     * @throws AuthorizationException
     * @return void
     */
    public function show(FieldType $fieldType)
    {
        $this->authorize('admin.field-type.show', $fieldType);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param FieldType $fieldType
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(FieldType $fieldType)
    {
        $this->authorize('admin.field-type.edit', $fieldType);


        return view('admin.field-type.edit', [
            'fieldType' => $fieldType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFieldType $request
     * @param FieldType $fieldType
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateFieldType $request, FieldType $fieldType)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values FieldType
        $fieldType->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/field-types'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/field-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyFieldType $request
     * @param FieldType $fieldType
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyFieldType $request, FieldType $fieldType)
    {
        $fieldType->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyFieldType $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyFieldType $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    FieldType::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
