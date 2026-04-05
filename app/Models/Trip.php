<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['departureCity','arrivalCity','date','livrer_id','vehicle_id'];

    public function livrer() {
        return $this->belongsTo(User::class, 'livrer_id');
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    

}
