<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\PelayananInput;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public
    function index() {
        return view('admin.index', [
            'title'=>'Dashboard',
            'totalUsers'=>User::count(),
            'totalLayanan'=>Pelayanan::count(),
            'totalPermintaan'=>PelayananInput::count(),
            'pelayanan'=>Pelayanan::get(),
            'akun'=>User::get(),
            'role'=>Role::get(),
            'totalRole'=>Role::count(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public
    function create() {
        return view('admin.create', [
            'title'=>'Role',
            'roles'=>Role::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public
    function store(Request $request) {
        User::create($request -> all());

        return redirect() -> route('akun.index') -> with('success', 'User added successfully');
    }

    /**
     * Display the specified resource.
     */
    public
    function show($superadmin) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(string $id) {
        //
    }
}
