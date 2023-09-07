<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class SuperadminController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public
    function index() {
        $totalUsers = User::count();
        // $totalPermintaan = Permintaan::count();
        $totalLayanan = Pelayanan::count();
        $pelayanan = Pelayanan::get();
        $akun         = User::get();

        return view('superadmin.index', compact('totalUsers', 'totalLayanan', 'pelayanan', 'akun'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public
    function create() {
        $roles = Role::all();
        return view('superadmin.create', compact('roles'));
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
