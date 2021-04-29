<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Maintenance extends Model
{
    use HasFactory;

    protected $casts = [
        'is_paid' => 'boolean',
    ];

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function getDateAttribute($value) {
        return Date::parse($value)->toFormattedDateString();
    }
}
