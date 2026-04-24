<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
     protected $fillable = [
        'title','image','weight','departureCity','arrivalCity','description','status','user_id','category_id','departure_date', 'arrival_date'
    ];

    public function client() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function proposals() {
        return $this->hasMany(Proposal::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
