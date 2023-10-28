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
            'title'=>'Akun',
            'akun' => User::get()
        ]);
    }

    public function destroy(User $akun){
        $akun->delete();
        return redirect()->route('akun.index')->with('success', 'User delete successfully');
     }
     public function update(Request $request, $id)
{
    // Validasi input
    $this->validate($request, [
        'password' => 'required|string|min:6|confirmed',
    ]);

    // Dapatkan data akun yang akan diperbarui
    $akun = User::find($id);

    if (!$akun) {
        return redirect()->back()->with('error', 'Akun tidak ditemukan.');
    }

    // Update password
    $akun->password = bcrypt($request->input('password'));

    $akun->save();

    return redirect()->route('akun.index')->with('success', 'Password akun berhasil diperbarui.');
}
     public function edit($id)
    {
        $akun = User::findOrFail($id);

        return view('akun.edit', ['title'=>'Akun'],compact('akun'));
    }
}
