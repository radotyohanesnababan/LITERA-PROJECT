<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    use HasFactory;
    protected $table = "testi";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'asal_sekolah', 'universitas','program_studi', 'deskripsi'
    ];
}
