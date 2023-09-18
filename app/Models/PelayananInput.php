<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelayananInput extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'form'
    ];
}
