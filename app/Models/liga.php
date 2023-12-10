<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liga extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class, 'liga_id', 'id');
    }
}
