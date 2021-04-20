<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_reg', 'nama', 'jk', 'alamat', 'agama',
        'asal_sekolah', 'minat_jurusan'
    ];
}
