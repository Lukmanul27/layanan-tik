<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Pelayanan;
use App\Models\PelayananInput;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use PDF;

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
     * Store a newly created resource in storage.
     */
    public
    function store(Request $request) {
        User::create($request -> all());

        return redirect() -> route('akun.index') -> with('success', 'User added successfully');
    }

    public function show()
    {
        return view('admin.create',[
            'title'=> 'Role',
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Buat akun pengguna
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->save();

        return redirect()->route('admin.create')->with('success', 'Akun pengguna berhasil dibuat.');
    }
    public
    function laporan() {
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.laporan_admin',[
            'totalUsers'=>User::count(),
            'totalLayanan'=>Pelayanan::count(),
            'totalPermintaan'=>PelayananInput::count(),
            'pelayanan'=>Pelayanan::get(),
            'akun'=>User::get(),
            'role'=>Role::get(),
            'totalRole'=>Role::count(),
            'pengajuan' => PelayananInput::get(),
            'user' => User::get(),
            'petugasUsers' => Role::where('name', 'Petugas')->firstOrFail()->users,
        ]);
        // return $pdf->download('admin.index');
        return $pdf->stream();
    }
}
