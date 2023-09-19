<?php

namespace App\Http\Controllers;

use App\Models\PelayananInput;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengajuan.index',[
            'pengajuan'=>PelayananInput::get(),
            'user'=>User::get(),
            'petugasUsers'=>Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
    }
    public function simpanStatus(Request $request)
    {
        $status = $request->input('status');

        PelayananInput::create(['status' => $status]);

        return redirect()->route('pengajuan.index')->with('success', 'Pelayanan delete successfully');
    }

    public function dashboard()
    {
        return view('pengajuan.dashboard_skpd');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = $request->input('status');

        PelayananInput::create(['status' => $status]);

        return redirect()->route('pengajuan.index')->with('success', 'Pelayanan delete successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
