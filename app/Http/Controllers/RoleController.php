<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->canNot('view-roles')) {
            abort(403);
        }

        $data = [
            'roles'         => Role::all(),
            'permissions'   => Permission::all(),
            'header'        => "Alle rollen"
        ];

        return view('roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->canNot('create-roles')) {
            abort(403);
        }


        $data = [
            'header' => "Maak rol"
        ];

        return view('roles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Role::create(['name' => $request->title]);

        return redirect()->route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id1`   
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {

        if (Auth::user()->canNot('edit-roles')) {
            abort(403);
        }



        $data = [
            'role'          => $role,
            'permissions'   => Permission::all(),
            'header'        => "Update rol"
        ];

        return view('roles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->name = $request->title;
        $role->syncPermissions($request->permissions);
        $role->save();

        $data = [
            'role'   => $role,
        ];

        return redirect()->route('roles.edit', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {

        if (Auth::user()->canNot('delete-roles')) {
            abort(403);
        }

        $role->delete();
        return redirect()->route('roles.index');
    }
}