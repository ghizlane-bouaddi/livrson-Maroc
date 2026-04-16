<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{


public function index(Request $request)
{

    $user = auth()->user();
    $query = Offer::query();


    if ($user->role->name == 'client') {
        $query->where('user_id', $user->id);
    } else {
        $query->where('status', 'pending');

    }


    if ($request->filled('departure_city')) {
        $query->where('departureCity', 'LIKE', '%' . $request->departure_city . '%');
    }
    if ($request->filled('arrival_city')) {
        $query->where('arrivalCity', 'LIKE', '%' . $request->arrival_city . '%');
    }


    $offers = $query->latest()->paginate(9);
    $categories = Category::all();

    return view('offers.index', compact('offers', 'categories'));
}
   public function create()
{

    $categories = Category::all();

    return view('offers.create', compact('categories'));
}



public function store(Request $request)
{
    $validated = $request->validate([
        'title'         => 'required|string|max:100',
        'category_id'   => 'required|exists:categories,id',
        'weight'        => 'required|numeric',
        'departureCity' => 'required|string',
        'arrivalCity'   => 'required|string',
        'description'   => 'required|string',
    ]);

    $offer = new Offer($validated);
   $offer->user_id = auth()->id();
    $offer->status = 'pending';
    $offer->save();

    return redirect()->route('offers.index');
}

public function show($id)
{
    $offer = Offer::with(['client', 'category'])->findOrFail($id);
    return view('offers.show', compact('offer'));
}

public function edit(Offer $offer)
{

    if ($offer->user_id !== auth()->id()) {
        abort(403, 'Action non autorisée.');
    }

    $categories = Category::all();
    return view('offers.edit', compact('offer', 'categories'));
}

public function update(Request $request, Offer $offer)
{

    if ($offer->user_id !== auth()->id()) {
        abort(403);
    }

    $validated = $request->validate([
        'title'         => 'required|string|max:100',
        'category_id'   => 'required|exists:categories,id',
        'weight'        => 'required|numeric',
        'departureCity' => 'required|string',
        'arrivalCity'   => 'required|string',
        'description'   => 'required|string',
    ]);

    $offer->update($validated);

    return redirect()->route('offers.index');
}


    public function destroy(Offer $offer)
    {

        if ($offer->user_id !== Auth::id()) {
            abort(403);
        }

        $offer->delete();
        return redirect()->route('offers.index');
    }
}
