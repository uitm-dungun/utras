<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $appends = ['located_at_campus_name'];

    public function maintenances() {
        return $this->hasMany(Maintenance::class);
    }

    public function maintenanceLatest() {
        // return 'nice';
        return $this->maintenances()->latest('date')->first();
    }

    public function getTypeAttribute($value) {
        return ucwords($value);
    }

    public function getIsAvailableAttribute($value) {
        return boolval($value);
    }

    public function getLocatedAtCampusNameAttribute() {
        return [
            'dgn' => 'Dungun',
            'kt' => 'Kuala Terengganu',
            'bb' => 'Bukit Besi',
        ][$this->located_at_campus_code];
    }

    public function nice() {
        return 'nice';
    }
}
