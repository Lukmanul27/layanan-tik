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
        return view('Isianlayanan.index');
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
         PelayananInput::create($request->all());

         return redirect()->route('pelayanan.index')->with('success', 'Pelayanan Berhasil Diajukan');
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
