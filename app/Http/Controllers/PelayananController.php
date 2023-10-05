<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\PelayananInput;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Pelayanan::get();
        return view('pelayanan.index', [
            'title'=>'Pelayanan',
            'pelayanan' => Pelayanan::get()
        ]);
    }
    public function create()
    {
        return view('pelayanan.create', [
            'title'=>'PelayananCreate',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         Pelayanan::create($request->all());

         return redirect()->route('pelayanan.index')->with('success', 'Pelayanan added successfully');
     }

     public function edit(Pelayanan $pelayanan) {
        return view('pelayanan.edit', ['pelayanan' => $pelayanan, 'title' => 'Pelayanan']);
    }

     public function update(Pelayanan $pelayanan, Request $request){
        $pelayanan->update($request->only('nama', 'deskripsi', 'form'));

         return redirect()->route('pelayanan.index')->with('success', 'Pelayanan updated successfully');
     }
     public function destroy($id)
    {
        $isUsed = PelayananInput::where('pelayanan_id', $id)->exists();

        if ($isUsed) {
            return redirect()->route('pelayanan.index')
                ->with('error', 'Pelayanan tidak dapat dihapus karena sedang digunakan.');
        }

        Pelayanan::destroy($id);

        return redirect()->route('pelayanan.index')
            ->with('success', 'Pelayanan berhasil dihapus.');
    }
}
