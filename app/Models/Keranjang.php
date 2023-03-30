<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = "keranjang";
    protected $fillable =
    [
        'id_produk','nama_produk','harga','jumlah','total_harga'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function produk()
    {
        return $this->belongsTo(produk::class);
    }
}
