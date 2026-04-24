<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{

    protected $fillable = ['price','vehicle_type', 'note', 'status', 'offer_id', 'livreur_id'];

    public function offer() {
        return $this->belongsTo(Offer::class);
    }

   
    public function livreur() {
        return $this->belongsTo(User::class, 'livreur_id');
    }
}
