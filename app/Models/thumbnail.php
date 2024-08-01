<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\event;

class thumbnail extends Model
{
    use HasFactory;
    protected $fillable = [
        'thumbnail',
        'event_id',
        'ref'
    ];
    public function event()
    {
        return $this->belongsTo(event::class);
    }
}
