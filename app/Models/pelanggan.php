<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = ['users_id' , 'jk', 'no_hp', 'alamat'];

    public function user()
    {
        return $this->BelongsTo('App\Models\User');
    }
}
