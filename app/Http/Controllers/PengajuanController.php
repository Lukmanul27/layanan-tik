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
        $pelayananInput->update(['status' => 'Ditolak']);

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
    public function store(Request $request)
    {
        $id = $request->input('id');

        $pelayananInput = PelayananInput::findOrFail($id);

        if ($pelayananInput->status !== 'Diterima') {
            return redirect()->route('pengajuan.show', $id)->with('error', 'Pengajuan harus dalam status "Diterima" sebelum menunjuk petugas.');
        }

        $validatedData = $request->validate([
            'petugas_id' => 'required|exists:users,id',
        ]);

        $pelayananInput->petugas_id = $validatedData['petugas_id'];

        $petugas = User::find($validatedData['petugas_id']);
        $pelayananInput->petugas_data = [
            'id' => $petugas->id,
            'name' => $petugas->name,
        ];

        $pelayananInput->save();

        return redirect()->route('pengajuan.index')->with('success', 'Petugas telah ditunjuk untuk pengajuan ini.');
    }
}
