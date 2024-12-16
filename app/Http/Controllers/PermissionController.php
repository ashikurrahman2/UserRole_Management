<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
    return view('admin.role-permission.permission.index', compact('permissions'));
    }
    public function create(){
        $permissions = Permission::all();
        return view('admin.role-permission.permission.create', compact('permissions'));

    }

    // public function store(Request $request){
        
    //     $request->validate([
    //         'name'=>[
    //             'required', 
    //             'string',
    //             'unique: permissions, name'
    //         ]
    //     ]);
         
    //     Permission::newPermission($request);
    //     $this->toastr->success('Permission Created successfully!');
    //     return back();

    // }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|unique:permissions,name',
    ]);

    Permission::create(['name' => $request->name, 'guard_name' => $request->guard_name ?? 'Admin']);
    
    return redirect()->route('permissions.index')->with('success', 'Permission created successfully!');
}

    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
