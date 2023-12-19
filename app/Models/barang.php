<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\peminjaman;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_barang';

    protected $table = 'barang';
    protected $fillable = ['nama_barang', 'kondisi', 'tersedia'];
    public $timestamps = false;

    public function peminjaman()
{
    return $this->hasMany(peminjaman::class, 'id_barang');
}
}