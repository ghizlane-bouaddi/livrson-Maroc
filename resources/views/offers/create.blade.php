@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#f8fafc] py-12">
    <div class="max-w-3xl mx-auto px-6">

        <div class="mb-10 text-center">
            <a href="{{ route('offers.index') }}" class="text-blue-900 hover:text-orange-500 transition font-bold text-xs uppercase tracking-[0.2em] mb-4 inline-block">
                Retour au tableau de bord
            </a>
            <h1 class="text-4xl md:text-5xl font-black text-blue-950 uppercase italic tracking-tighter">
                Publier une <span class="text-orange-500">Expédition</span>
            </h1>
            <p class="text-gray-400 font-medium mt-3 italic text-sm">Complétez les informations pour recevoir des offres de transporteurs.</p>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.04)] border border-gray-100 p-8 md:p-12">
            <form action="{{ route('offers.store') }}" method="POST" class="space-y-8">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-3 ml-2">Titre de l'annonce</label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            placeholder="Ex: Transport d'une Namoussia 2 places"
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-semibold text-blue-950">
                        @error('title') <p class="text-red-500 text-xs mt-2 ml-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-3 ml-2">Catégorie</label>
                        <select name="category_id"
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-bold text-blue-950 appearance-none">
                            <option value="" disabled selected>Choisir une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <p class="text-red-500 text-xs mt-2 ml-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-3 ml-2">Poids Estimé (KG)</label>
                        <input type="number" name="weight" value="{{ old('weight') }}"
                            placeholder="0"
                            class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-semibold text-blue-950">
                        @error('weight') <p class="text-red-500 text-xs mt-2 ml-2 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-3 ml-2">Ville de Départ</label>
                        <div class="relative">
                            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-orange-500 font-bold">●</span>
                            <input type="text" name="departureCity" value="{{ old('departureCity') }}"
                                placeholder="Ex: Casablanca"
                                class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-10 pr-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-semibold text-blue-950">
                        </div>
                        @error('departureCity') <p class="text-red-500 text-xs mt-2 ml-2 font-bold">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-3 ml-2">Ville d'Arrivée</label>
                        <div class="relative">
                            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-blue-900 font-bold">●</span>
                            <input type="text" name="arrivalCity" value="{{ old('arrivalCity') }}"
                                placeholder="Ex: Marrakech"
                                class="w-full bg-gray-50 border-none rounded-2xl py-4 pl-10 pr-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-semibold text-blue-950">
                        </div>
                        @error('arrivalCity') <p class="text-red-500 text-xs mt-2 ml-2 font-bold">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="pt-4">
                    <label class="block text-[10px] font-black text-blue-900 uppercase tracking-widest mb-3 ml-2">Description & Notes</label>
                    <textarea name="description" rows="4"
                        placeholder="Précisez les dimensions, l'étage, ou toute information importante..."
                        class="w-full bg-gray-50 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition shadow-sm font-semibold text-blue-950">{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-500 text-xs mt-2 ml-2 font-bold">{{ $message }}</p> @enderror
                </div>

                <div class="pt-6">
                    <button type="submit"
                        class="w-full bg-blue-950 hover:bg-orange-500 text-white font-black py-5 rounded-[1.5rem] shadow-2xl transform hover:scale-[1.01] active:scale-[0.98] transition-all duration-300 uppercase tracking-widest italic flex items-center justify-center gap-3">
                        <span>Publier mon annonce</span>
                        <span class="text-xl">🚀</span>
                    </button>
                </div>
            </form>
        </div>

        
    </div>
</div>

<style>

    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23172554' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 1.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
    }
</style>
@endsection
