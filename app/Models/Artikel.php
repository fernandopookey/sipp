<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    // Model berinteraksi dengan database
    use HasFactory;

    protected $fillable = [
        "nama_lengkap",
        "nim",
        "alamat",
        "alamat",
        "gender",
        "nama_panggilan"
    ];
};
