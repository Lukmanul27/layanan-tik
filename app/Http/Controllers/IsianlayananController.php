<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\PelayananInput;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class IsianlayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Isianlayanan.index', [
            'pelayanan' => Pelayanan::get()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->pelayanan_id;

        PelayananInput::create([
            'pelayanan_id'=>$request->pelayanan_id,
            'data'=> json_encode($request -> except('_token', 'pelayanan_id')),
            'user_id'=>auth()->user()->id,
        ]);
        return redirect()->route('skpd.index')->with('success', 'Pelayanan Berhasil Diajukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $form = Pelayanan::find($id);

        return view('Isianlayanan.index', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
