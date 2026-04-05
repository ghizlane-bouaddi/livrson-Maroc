<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
        protected $fillable = ['price','note','status','offer_id','livrer_id'];

         public function offer() {
        return $this->belongsTo(Offer::class);
    }

    public function livrer() {
        return $this->belongsTo(User::class, 'livrer_id');
    }

}
