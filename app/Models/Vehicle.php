<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['type','capacity','livrer_id'];

    public function livrer() {
        return $this->belongsTo(User::class, 'livrer_id');
    }

     public function trips() {
        return $this->hasMany(Trip::class);
    }

}
