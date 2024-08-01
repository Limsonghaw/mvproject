<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\event;
class email extends Model
{
    use HasFactory;
    protected $table = 'email';
    // public $timestamps=false;
    public function event()
    {
        return $this->belongsTo(event::class, 'event_id');//event_id 是 column name
    }
    protected $fillable = [
        'radiotype',
        'title',
        'sendtoradio',
        'multipledate',
        'content'
    ];
}
