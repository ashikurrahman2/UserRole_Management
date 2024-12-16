<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
    return view('admin.role-permission.permission.index');
    }
    public function create(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
