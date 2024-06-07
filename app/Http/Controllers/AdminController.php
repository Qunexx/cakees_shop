<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function users()
    {
        $users = User::get();
        return view('admin.users.index',compact('users'));
    }

    public function userEdit($id)
    {
        $user = User::findOrFail($id);
        $roles = ['user', 'manager', 'admin'];

        return view('admin.users.edit',compact('user','roles'));
    }

    public function userRoleUpdate(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:user,manager,admin'
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Роль пользователя успешно обновлена!');
    }






}
