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
            'totalLayanan' => Pelayanan::count(),
            'pelayanan' => Pelayanan::get(),
        ]);
    }
    public function layananmasuk()
    {
        return view('petugas.layananmasuk',[
            'title'=>'Permintaan Layanan',
            'pengajuan'=>PelayananInput::get(),
            'user'=>User::get(),
            'petugasUsers'=>Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
    }
}
