<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman_kerja extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jabatan','tahun_masuk','tahun_keluar'
    ];
    protected $table = 'pengalaman_kerja';
}
