<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Departament\BulkDestroyDepartament;
use App\Http\Requests\Admin\Departament\DestroyDepartament;
use App\Http\Requests\Admin\Departament\IndexDepartament;
use App\Http\Requests\Admin\Departament\StoreDepartament;
use App\Http\Requests\Admin\Departament\UpdateDepartament;
use App\Models\Country;
use App\Models\Departament;
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

class DepartamentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDepartament $request
     * @return array|Factory|View
     */
    public function index(IndexDepartament $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Departament::class)
        ->modifyQuery(function($query){
            $query->with('country');
         })
        ->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'country_id'],

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

        return view('admin.departament.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.departament.create');
        $country = Country::get();

        return view('admin.departament.create', ['country' => $country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDepartament $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDepartament $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Departament
        $departament = Departament::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/departaments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/departaments');
    }

    /**
     * Display the specified resource.
     *
     * @param Departament $departament
     * @throws AuthorizationException
     * @return void
     */
    public function show(Departament $departament)
    {
        $this->authorize('admin.departament.show', $departament);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Departament $departament
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Departament $departament)
    {
        $this->authorize('admin.departament.edit', $departament);
        $departament->country_id = (string)$departament->country_id;
        $country = Country::get();

        return view('admin.departament.edit', [
            'departament' => $departament,
            'country' => $country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDepartament $request
     * @param Departament $departament
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDepartament $request, Departament $departament)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Departament
        $departament->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/departaments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/departaments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDepartament $request
     * @param Departament $departament
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDepartament $request, Departament $departament)
    {
        $departament->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDepartament $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDepartament $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Departament::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
