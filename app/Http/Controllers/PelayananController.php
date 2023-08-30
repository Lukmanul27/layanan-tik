<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Pelayanan::get();
        return view('pelayanan.index', [
            'pelayanan' => Pelayanan::get()
        ]);
    }
    public function create()
    {
        return view('pelayanan.create');
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

     public function edit(Pelayanan $pelayanan){
        return view('pelayanan.edit', compact('pelayanan'));
     }

     public function update(Pelayanan $pelayanan, Request $request){
        $pelayanan->update($request->only('nama', 'deskripsi', 'form'));

         return redirect()->route('pelayanan.index')->with('success', 'Pelayanan updated successfully');
     }
     public function destroy(Pelayanan $pelayanan){
        $pelayanan->delete();

         return redirect()->route('pelayanan.index')->with('success', 'Pelayanan delete successfully');
     }

}
