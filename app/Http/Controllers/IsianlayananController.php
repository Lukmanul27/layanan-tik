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
        $pelayananInput = PelayananInput::create([
            'pelayanan_id' => $request->pelayanan_id,
            'data' => json_encode($request->except('_token', 'pelayanan_id')),
            'user_id' => auth()->user()->id,
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public');

            $pelayananInput->file_path = $fileName;
            $pelayananInput->save();
        }
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
    public function download($filename)
    {
        $file = storage_path('app/public/uploads/' . $filename);

        if (file_exists($file)) {
            return response()->download($file);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
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
