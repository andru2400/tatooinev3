<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rule\BulkDestroyRule;
use App\Http\Requests\Admin\Rule\DestroyRule;
use App\Http\Requests\Admin\Rule\IndexRule;
use App\Http\Requests\Admin\Rule\StoreRule;
use App\Http\Requests\Admin\Rule\UpdateRule;
use App\Models\Rule;
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

class RulesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRule $request
     * @return array|Factory|View
     */
    public function index(IndexRule $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Rule::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'validation_string'],

            // set columns to searchIn
            ['id', 'name', 'validation_string']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.rule.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.rule.create');

        return view('admin.rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRule $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreRule $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Rule
        $rule = Rule::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/rules'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/rules');
    }

    /**
     * Display the specified resource.
     *
     * @param Rule $rule
     * @throws AuthorizationException
     * @return void
     */
    public function show(Rule $rule)
    {
        $this->authorize('admin.rule.show', $rule);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Rule $rule
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Rule $rule)
    {
        $this->authorize('admin.rule.edit', $rule);


        return view('admin.rule.edit', [
            'rule' => $rule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRule $request
     * @param Rule $rule
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateRule $request, Rule $rule)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Rule
        $rule->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/rules'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/rules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRule $request
     * @param Rule $rule
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyRule $request, Rule $rule)
    {
        $rule->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyRule $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyRule $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Rule::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
