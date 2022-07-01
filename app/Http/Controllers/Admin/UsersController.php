<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\BulkDestroyUser;
use App\Http\Requests\Admin\User\DestroyUser;
use App\Http\Requests\Admin\User\IndexUser;
use App\Http\Requests\Admin\User\StoreUser;
use App\Http\Requests\Admin\User\UpdateUser;
use App\Models\CampaignOwner;
use App\Models\OwnerLocation;
use App\Models\User;
use App\Models\UserAttribute;
use App\Models\UserAttributeValue;
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
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUser $request
     * @return array|Factory|View
     */
    public function index(IndexUser $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(User::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'email', 'email_verified_at'],

            // set columns to searchIn
            ['id', 'name', 'email']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.user.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.user.create');
        $owner_locations = OwnerLocation::with(['campaign_owner','city'])
        ->orderBy('campaign_owner_id', 'ASC')
        ->orderBy('city_id', 'ASC')
        ->get();

        $owner_locations->each(function ($query) {
            $query->name = mb_strtoupper("{$query->campaign_owner->name} - {$query->city->name} - {$query->name}");
        });

        $user_attributes = UserAttribute::get();

        return view('admin.user.create', [
                                            'owner_locations' => $owner_locations,
                                            'user_attributes' => $user_attributes
                                         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUser $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUser $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the User
        $sanitized['password'] = Hash::make($sanitized['password']);
        $user = User::create($sanitized);

        // pivot options
        if ($request->input('owner_locations')) {
            $user->owner_locations()->sync(collect($request->input('owner_locations', []))->map->id->toArray());
        }

        // Llena user_attribute_values
        foreach ($request->user_attributes as $key => $value) {
            $user_attribute_temp                        = UserAttribute::where('name', $key)->first();  /* Busca el atributo para validar unos datos*/

            if($user_attribute_temp->islist == 1){                                                      /* Si Es lista (Select) */

                if($user_attribute_temp->unique == 1){                                                  /* Si es Select Unico */
                    $this->saveUserAtributeValue($user->id, $user_attribute_temp->id, $value, null);
                }else{                                                                                  /* Si es Select Multiple */
                    foreach ($value as $key2 => $value2) {
                        $this->saveUserAtributeValue($user->id, $user_attribute_temp->id, $value2['id'], null);
                    }
                }
            }else{                                                                                      /* Si es (Input) */
                $this->saveUserAtributeValue($user->id, $user_attribute_temp->id, null, $value);
            }
        }

        if ($request->ajax()) {
            return ['redirect' => url('admin/users'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/users');
    }

    public function saveUserAtributeValue($userId, $userAttributeId, $userAttributeOptionId, $value){

        $user_attribute_value                              = new UserAttributeValue();
        $user_attribute_value->user_id                     = $userId;
        $user_attribute_value->user_attribute_id           = $userAttributeId;
        $user_attribute_value->user_attribute_option_id    = $userAttributeOptionId;
        $user_attribute_value->value                       = $value;
        $user_attribute_value->save();

        return $user_attribute_value;

    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @throws AuthorizationException
     * @return void
     */
    public function show(User $user)
    {
        $this->authorize('admin.user.show', $user);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(User $user)
    {
        $this->authorize('admin.user.edit', $user);
        $user->load('owner_locations');

        //necesario para cambiar el nombre de las relaciones seleccionadas
        $user->owner_locations->each(function ($query) {
            $query->name = mb_strtoupper("{$query->campaign_owner->name} - {$query->city->name} - {$query->name}");
        });

        //necesario para cambiar el nombre al listado
        $owner_locations = OwnerLocation::with(['campaign_owner','city'])
        ->orderBy('campaign_owner_id', 'ASC')
        ->orderBy('city_id', 'ASC')
        ->get();

        $owner_locations->each(function ($query) {
            $query->name = mb_strtoupper("{$query->campaign_owner->name} - {$query->city->name} - {$query->name}");
        });


        return view('admin.user.edit', [
            'user' => $user,
            'owner_locations' => $owner_locations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUser $request
     * @param User $user
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUser $request, User $user)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        if(isset($sanitized['password'])){
            $sanitized['password'] = Hash::make($sanitized['password']);
        }

        // Update changed values User
        $user->update($sanitized);

        // pivot options
        if ($request->input('owner_locations')) {
            $user->owner_locations()->sync(collect($request->input('owner_locations', []))->map->id->toArray());
        }

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/users'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUser $request
     * @param User $user
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUser $request, User $user)
    {
        $user->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUser $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUser $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    User::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
