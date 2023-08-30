<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class AjukanController extends Controller
{
    public function index()
    {
        return view('ajukan.index', [
            'pelayanan' => Pelayanan::get()
        ]);
    }
}
