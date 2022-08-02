<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName() {
        return 'name';
    }

    public function driver(){
        return $this->hasMany(Driver::class);
    }
}
