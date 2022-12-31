<?php

namespace App\Http\Controllers;

use App\permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    public function index() {
        return view('admin.permission.index', ['permissions'=> permission::all()]);
    }

    public function store( ) {
        request()->validate([
            'name' => 'required'
        ]);
        permission::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);
        return back();
    }
    public function update(permission $permission){
        $permission->name = Str::ucfirst(request('name'));
        $permission->slug = Str::of(request('name'))->slug('-');
        if ($permission->isDirty('name')) {
            $permission->save();
            session()->flash('permission-update', 'Permission Updated: ' . $permission->name);
        }else{
            session()->flash('permission-update', 'Notting is changed');
        }

        return back();
    }
    public function edit(permission $permission){
        return view('admin.permission.edit', ['permission' => $permission]);
    }

    public function destroy(permission $permission){
        $permission->delete();
        return back();
    }
}
