<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = "profil";
    protected $primaryKey = 'id';
    protected $fillable = [
        'artinama','sejarah','visi','misi','unggulan','instagram_link','whatsapp_link','alamat'
    ];
}
