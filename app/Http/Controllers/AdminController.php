<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
   public function index()
    {

        $delivered = Offer::where('status', 'delivered')->count();


        $pending = Offer::where('status', 'pending')->count();


        $notDelivered = Offer::whereIn('status', ['cancelled', 'refused'])->count();

        return view('admin.dashboard', compact('delivered', 'pending', 'notDelivered'));
    }

  public function livreurs() {

        $users = User::whereHas('role', function($q){
            $q->where('name', 'livrer');
        })->get();

        $title = "Liste des Livreurs";
        return view('admin.index', compact('users', 'title'));
    }

    public function clients() {
        
        $users = User::whereHas('role', function($q){
            $q->where('name', 'client');
        })->get();

        $title = "Liste des Clients";
        return view('admin.index', compact('users', 'title'));
    }

}
