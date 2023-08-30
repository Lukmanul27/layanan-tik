<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index() {
        $pelayanan = Pelayanan::get();

        return view('dashboard', compact('pelayanan'));
    }
}
