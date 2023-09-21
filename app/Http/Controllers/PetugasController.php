<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\PelayananInput;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PetugasController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public
    function index() {
        return view('petugas.index', [
            'pengajuan' => PelayananInput::get(),
            'totalLayanan' => Pelayanan::count(),
            'pelayanan' => Pelayanan::get(),
        ]);
    }
    public function layananmasuk()
    {
        return view('petugas.layananmasuk',[
            'pengajuan'=>PelayananInput::get(),
            'user'=>User::get(),
            'petugasUsers'=>Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public
    function create() {
        $roles = Role::all();
        return view('petugas.create', compact('roles'));
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
    function show($petugas) {
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
