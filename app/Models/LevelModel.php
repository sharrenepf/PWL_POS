<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Sesuaikan dengan nama tabel di database kamu
    protected $primaryKey = 'level_id';
    
    // Fillable kalau nanti kamu mau tambah data level lewat kode
    protected $fillable = ['level_kode', 'level_nama'];
}