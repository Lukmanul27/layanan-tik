<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\PelayananInput;
use App\Models\PengajuanAksi;
use App\Models\PengajuanStat;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('skpd.index',
        [
            'pelayanan'=>Pelayanan::get(),
            'pengajuan'=>PelayananInput::get(),
            'user'=>User::get(),
            'petugasUsers'=>Role::where('name', 'Petugas')->firstOrFail()->users,
            'stat'=>PengajuanStat::get(),
            'paksi'=>PengajuanAksi::get(),
        ]);
    }
}
