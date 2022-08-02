<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model {
    use HasFactory;

    protected $guarded = [];

    protected $with = 'driver';

    public function getRouteKeyName() {
        return 'driver_number';
    }

    public function driver(){
        return $this->belongsTo(Driver::class, 'driver_number', 'driver_number');
    }
}
