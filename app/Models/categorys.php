<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\skus;
class categorys extends Model
{
    use HasFactory;

    public function sku(){
        return $this->hasMany(skus::class);
    }

}
