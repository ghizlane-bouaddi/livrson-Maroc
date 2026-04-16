@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#f8fafc] py-12">
    <div class="max-w-3xl mx-auto px-6">

        <div class="mb-10 text-center">
            <h1 class="text-4xl font-black text-blue-950 uppercase italic tracking-tighter">
                Modifier l'<span class="text-orange-500">Annonce</span>
            </h1>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-xl p-8 md:p-12 border border-gray-100">
            <form action="{{ route('offers.update', $offer) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-2 ml-2">Titre</label>
                        <input type="text" name="title" value="{{ old('title', $offer->title) }}" required
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-2 ml-2">Catégorie</label>
                        <select name="category_id" class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $offer->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-2 ml-2">Poids (KG)</label>
                        <input type="number" name="weight" value="{{ old('weight', $offer->weight) }}" required
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-2 ml-2">Départ</label>
                        <input type="text" name="departureCity" value="{{ old('departureCity', $offer->departureCity) }}" required
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-2 ml-2">Arrivée</label>
                        <input type="text" name="arrivalCity" value="{{ old('arrivalCity', $offer->arrivalCity) }}" required
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold">
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-2 ml-2">Description</label>
                    <textarea name="description" rows="3" required
                        class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold">{{ old('description', $offer->description) }}</textarea>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit" class="flex-1 bg-blue-950 hover:bg-orange-500 text-white font-black py-4 rounded-2xl shadow-lg transition-all uppercase italic">
                        Enregistrer les modifications
                    </button>
                    <a href="{{ route('offers.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-500 font-black py-4 px-8 rounded-2xl transition-all uppercase italic text-xs flex items-center">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
