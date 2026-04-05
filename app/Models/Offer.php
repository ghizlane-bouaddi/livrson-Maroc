<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
     protected $fillable = [
        'productType','weight','departureCity','arrivalCity','description','status','client_id','category_id'
    ];

    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function proposals() {
        return $this->hasMany(Proposal::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
