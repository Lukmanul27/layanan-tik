<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        // return Pelayanan::get();
        return view('petugas.index');
    }
}
