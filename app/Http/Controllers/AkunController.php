<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        // return Pelayanan::get();
        return view('akun.index', [
            'akun' => User::get()
        ]);
    }

    public function destroy(User $akun){
        $akun->delete();
        return redirect()->route('akun.index')->with('success', 'User delete successfully');
     }

     public function edit($id)
    {
        $akun = User::findOrFail($id);

        return view('akun.edit', compact('akun'));
    }
}
