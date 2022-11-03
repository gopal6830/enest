<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCart extends Model
{
    use HasFactory;

    protected $table="addcart";

     public function product()
    {
        return $this->belongsto(Product::class);
    }
}
