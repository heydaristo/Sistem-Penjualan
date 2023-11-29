<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\supplier;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['kode_product' ,'nama_barang', 'harga', 'satuan', 'stock', 'supplier_id'];

    public function supplier()
    {
        return $this->BelongsTo(supplier::class);
    }
}
