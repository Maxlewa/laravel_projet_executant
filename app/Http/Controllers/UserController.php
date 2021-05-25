<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.user.userIndex', compact('users'));
    }

    public function edit(User $user){
        $avatars = Avatar::all();
        $roles = Role::all();
        return view('admin.user.userEdit', compact('user', 'avatars', 'roles')); 
    }

    public function update(User $user, Request $request) {

        $user->name = $request->name;
        $user->email = $request->email;
        
        if ($user->role_id == 1) {
            $user->role_id = $request->role_id;
        } else {
            $user->role_id == 2;
        }
        $user->avatar_id = $request->avatar_id;
        $user->prenom = $request->prenom;
        $user->age = $request->age;

        $user->save(); 
        
        return redirect()->route('dashboard');
    }
}
