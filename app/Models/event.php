<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\venue;
use App\Models\voteby;
use App\Models\Image;
use App\Models\thumbnail;
use App\Models\email;
class event extends Model
{
    use HasFactory;
    protected $table = 'event';
    public $timestamps = false;

    public function venue()
    {
        return $this->belongsTo(venue::class, 'event_venue');
    }

    public function voteby()
    {
        return $this->belongsTo(voteby::class, 'voteby');
    }

    protected $guarded  = [];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function thumbnails(){
        return $this->hasMany(thumbnail::class);
    }

    public function email(){
        return $this->hasMany(email::class);
    }
}
