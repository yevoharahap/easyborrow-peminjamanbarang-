<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\user;
use App\Models\barang;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_peminjaman';

    protected $table = 'peminjaman';

    protected $fillable = [
        'id_user','id_barang', 'tanggal_peminjaman', 'tanggal_pengembalian', 'tersedia'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user', 'id_user');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class, 'id_barang', 'id_barang');
    }

}