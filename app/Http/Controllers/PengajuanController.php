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
        return view('pengajuan.index', [
            'title' => 'Pengajuan',
            'pengajuan' => PelayananInput::get(),
            'user' => User::get(),
            'petugasUsers' => Role::where('name', 'Petugas')->firstOrFail()->users,
        ])->with('file');
    }

    public function approve($id)
    {
        $pelayananInput = PelayananInput::findOrFail($id);
        // if ($pelayananInput->status !== 'Pengajuan') {
        //     return redirect()->route('pengajuan.index')->with('error', 'Status pengajuan harus "Pelayanan" untuk di-approve.');
        // }
        $pelayananInput->update(['approved' => true]);
        $pelayananInput->update(['status' => 'Diterima']);

        return redirect()->route('pengajuan.index')->with('success', 'Pelayanan Telah Disetujui');
    }
    public function disapprove($id)
    {
        $pelayananInput = PelayananInput::findOrFail($id);
        // if ($pelayananInput->status !== 'Pengajuan') {
        //     return redirect()->route('pengajuan.index')->with('error', 'Status pengajuan harus "Pelayanan" untuk di-approve.');
        // }
        $pelayananInput->update(['approved' => false]);
        $pelayananInput->update(['status' => 'ditolak']);

        return redirect()->route('pengajuan.index')->with('success', 'Pelayanan Telah Ditolak');
    }
    public function dashboard()
    {
        return view('pengajuan.dashboard_skpd');
    }
    public function show(string $id)
    {
        return view('pengajuan.show', [
            'pengajuan' => PelayananInput::get(),
            'user' => User::get(),
            'petugasUsers' => Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
    }
}
