<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProposalController extends Controller
{

    public function index(Request $request)
    {
        $offerId = $request->query('offer_id');
        $offer = Offer::with('proposals.livreur')->findOrFail($offerId);

        if ($offer->user_id !== Auth::id()) { abort(403); }

        return view('proposals.index', compact('offer'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'price' => 'required|numeric|min:1',
            'note' => 'nullable|string|max:500',
            'vehicle_type' => 'required|string',
            'offer_id' => 'required|exists:offers,id'
        ]);

        Proposal::create([
            'price' => $validated['price'],
            'note' => $validated['note'],
            'vehicle_type' => $validated['vehicle_type'],
            'offer_id' => $validated['offer_id'],
            'livreur_id' => auth()->id(),
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Votre offre a été envoyée !');
    }


    public function accept(Proposal $proposal)
    {
        if ($proposal->offer->user_id !== auth()->id()) { abort(403); }

        $proposal->update(['status' => 'accepted']);


        $proposal->offer->update(['status' => 'closed']);

        $proposal->offer->proposals()
            ->where('id', '!=', $proposal->id)
            ->update(['status' => 'rejected']);

        return redirect()->route('offers.index')->with('success', 'Transporteur choisi !');
    }


    public function myDeliveries()
    {
        $proposals = Proposal::where('livreur_id', auth()->id())
            ->whereIn('status', ['accepted', 'delivered'])
            ->with('offer')
            ->latest()
            ->get();

        return view('livreur.deliveries', compact('proposals'));
    }



public function myOrders()
{
    $offers = Offer::where('user_id', auth()->id())
        ->whereIn('status', ['closed', 'on_the_way', 'delivered'])
        ->with(['proposals' => function($query) {
            $query->whereIn('status', ['accepted', 'delivered']);
        }, 'proposals.livreur'])
        ->latest()
        ->get();

    return view('proposals.my_orders', compact('offers'));
}
    public function startDelivery(Proposal $proposal)
    {
        if ($proposal->livreur_id !== auth()->id()) { abort(403); }

        $proposal->offer->update([
            'status' => 'on_the_way',
            'started_at' => now()
        ]);

        return redirect()->back();
    }

    public function confirmDelivery(Proposal $proposal)
    {
        if ($proposal->livreur_id !== auth()->id()) { abort(403); }

        $proposal->update(['status' => 'delivered']);
        $proposal->offer->update([
            'status' => 'delivered',
            'delivered_at' => now()
        ]);

        return redirect()->back();
    }
}
