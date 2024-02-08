<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Film;
use App\Models\Cast;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        return view('role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = Film::get();
        $cast = Cast::get();
        return view('role.create', compact('film', 'cast'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'name' => 'required',
        ]);

        $role = new Role;
        $role->film_id = $request->film_id;
        $role->cast_id = $request->cast_id;
        $role->name = $request->name;

        $role->save();

        return redirect('/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $role = Role::find($id);
        return view('role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $role = Role::find($id);
        $film = Film::get();
        $cast = Cast::get();

        return view('role.edit', compact('role', 'film', 'cast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'name' => 'required',
        ]);

        $role = Role::find($id);
        $role->film_id = $request['film_id'];
        $role->cast_id = $request['cast_id'];
        $role->name = $request['name'];

        $role->save();

        return redirect('/role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('/role');
    }
}
