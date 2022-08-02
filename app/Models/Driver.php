<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model {

    use HasFactory;

    protected $guarded = [];

    protected $with = 'team';

    public function getRouteKeyName() {
        return 'driver_number';
    }

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function stats() {
        return $this->hasOne(Stats::class, 'driver_number', 'driver_number');
    }
}
