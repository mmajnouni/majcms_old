<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
        return view('admin.roles.index', ['roles' => $roles]);
    }
    public function edit(Role $role) {
        return view('admin.roles.edit', ['roles' => $role]);
    }

    public function store() {
        request()->validate([
            'name' => 'required'
            ]);
    Role::create([
        'name' => Str::ucfirst(request('name')),
        'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);
        return back();
    }

    public function destroy(Role $role) {
        $role->delete();
        session()->flash('role-deleted', 'Role deleted ' . $role->name );
        return back();
    }


}
