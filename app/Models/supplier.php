<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\pelanggan;


class supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';


    public function product()
    {
        return $this->hasMany(product::class);
    }
}
