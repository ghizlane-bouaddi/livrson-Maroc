<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function show()
    {
        $user = Auth::user();


        if ($user->role->name === 'client') {
            $offers = Offer::where('user_id', $user->id)->latest()->get();

            return view('profile.client', compact('user', 'offers'));
        }


        return view('profile.livreur', compact('user'));
    }
}
