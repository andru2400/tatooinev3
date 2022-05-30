<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Field\BulkDestroyField;
use App\Http\Requests\Admin\Field\DestroyField;
use App\Http\Requests\Admin\Field\IndexField;
use App\Http\Requests\Admin\Field\StoreField;
use App\Http\Requests\Admin\Field\UpdateField;
use App\Models\Field;
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

class FieldsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexField $request
     * @return array|Factory|View
     */
    public function index(IndexField $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Field::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'field_type_id', 'description'],

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

        return view('admin.field.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.field.create');

        return view('admin.field.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreField $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreField $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Field
        $field = Field::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/fields'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/fields');
    }

    /**
     * Display the specified resource.
     *
     * @param Field $field
     * @throws AuthorizationException
     * @return void
     */
    public function show(Field $field)
    {
        $this->authorize('admin.field.show', $field);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Field $field
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Field $field)
    {
        $this->authorize('admin.field.edit', $field);


        return view('admin.field.edit', [
            'field' => $field,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateField $request
     * @param Field $field
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateField $request, Field $field)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Field
        $field->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/fields'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/fields');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyField $request
     * @param Field $field
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyField $request, Field $field)
    {
        $field->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyField $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyField $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Field::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
