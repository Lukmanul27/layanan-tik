<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\PelayananInput;
use App\Models\User;
use App\Models\ProcessStatus;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PetugasController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public
    function index() {
        return view('petugas.index', [
            'title'=>'Dashboard',
            'pengajuan' => PelayananInput::get(),
            'totalPengajuan'=>PelayananInput::count(),
            'totalLayanan' => Pelayanan::count(),
            'pelayanan' => Pelayanan::get(),
        ]);
    }
    public function layananmasuk()
    {
        $adminUserId = auth()->user()->id;

        $pengajuan = PelayananInput::where('petugas_id', $adminUserId)->get();

        return view('petugas.layananmasuk', [
            'title' => 'Permintaan Layanan',
            'pengajuan' => $pengajuan,
            'user' => User::get(),
            'petugasUsers' => Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
    }
    public function store(Request $request)
    {
        $id = $request->input('id');

        // Find the relevant PelayananInput record by ID
        $pelayananInput = PelayananInput::find($id);

        if (!$pelayananInput) {
            return redirect()->route('petugas.layananmasuk')->with('error', 'Rekaman tidak ditemukan.');
        }

        // Update the process_status to the value from the request
        $process_status = $request->input('process_status');
        $pelayananInput->process_status = $process_status;
        $pelayananInput->save();

        return redirect()->route('petugas.layananmasuk')->with('success', 'Status berhasil diperbarui.');
    }

    public function update(Request $request, $id)
    {
        // Find the relevant PelayananInput record by ID
        $pelayananInput = PelayananInput::find($id);

        if (!$pelayananInput) {
            return redirect()->route('petugas.layananmasuk')->with('error', 'Rekaman tidak ditemukan.');
        }

        // Get the new process_status value from the form submission
        $process_status = $request->input('process_status');

        // Update the process_status to the new value
        $pelayananInput->process_status = $process_status;
        $pelayananInput->save();

        return redirect()->route('petugas.layananmasuk')->with('success', 'Status berhasil diperbarui.');
    }
}
