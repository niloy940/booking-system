<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = ['schedule_id', 'time_slot', 'is_booked'];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
