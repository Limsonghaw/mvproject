<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\event;

class venue extends Model
{
    use HasFactory;
    protected $table = 'venue';
    public $timestamps=false;
    public function event()
    {
        return $this->hasOne(event::class);
    }
}
