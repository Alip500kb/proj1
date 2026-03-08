<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class faktur extends Model
{
    use HasFactory;
    protected $table = 'fakturs';
    protected $fillable = [
        'id',
        'id_barang',
        'pembeli',
        'qty',
        'harga_total',
        'waktu_pembelian'
    ];

    /**
     * Get the pembeli that owns the faktur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function datapembeli():BelongsTo //nama function tidak boleh sama dengan yang di tabel
    { //wajib membuat Hasmany pada target yang akan diambil datanya
        return $this->belongsTo(Pemain::class,'pembeli', 'id');
                                //model target,nilai local yang akan dicocokan, nilai pada target yg akan dicocokan
    }
    public function namaproduk():BelongsTo
    {
        return $this->belongsTo(GameList::class, 'id_barang', 'id');
    }
}
