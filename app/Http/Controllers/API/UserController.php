<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();
        if ($query) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        return UserResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    public function getUserRoles(Request $request){
        $roles = [];

        if($request->user()->esAdministrador()){
            $roles[] = 'administrador';
        }
        if($request->user()->esDocente()){
            $roles[] = 'docente';
        }
        if($request->user()->esEstudiante()){
            $roles[] = 'estudiante';
        }
        return [
            'user' => $request->user(),
            'roles' => $roles
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $validate_data['password'] = bcrypt($validate_data['password']);
        $user = User::create($validate_data);

        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
