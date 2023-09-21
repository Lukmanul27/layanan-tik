<?php

namespace App\Http\Controllers;

use App\Models\PelayananInput;
use App\Models\PengajuanAksi;
use App\Models\PengajuanStat;
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

    public function approve($id)
    {
        $pelayananInput = PelayananInput::findOrFail($id);
        $pelayananInput->update(['approved' => true]);

        $pelayananInput->update(['status' => 'diterima']);

        return redirect()->route('pengajuan.index')->with('success', 'Pelayanan Telah Disetujui');
    }

    public function disapprove($id)
    {
        $pelayananInput = PelayananInput::findOrFail($id);
    $pelayananInput->update(['approved' => false]);

    $pelayananInput->update(['status' => 'ditolak']);

        return redirect()->route('pengajuan.index')->with('success', 'Pelayanan Telah Ditolak');
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
//
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pengajuan.show',[
            'pengajuan'=>PelayananInput::get(),
            'user'=>User::get(),
            'petugasUsers'=>Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
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
