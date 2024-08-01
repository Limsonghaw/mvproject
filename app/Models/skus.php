<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\categorys;
class skus extends Model
{
    use HasFactory;
    protected $table='skus';
    protected $primaryKey = 'sku_id';
    public function category(){
        return $this->belongsTo(categorys::class);
    }

}
