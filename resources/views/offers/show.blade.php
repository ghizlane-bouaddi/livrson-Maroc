@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12">

    <a href="{{ route('offers.index') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-blue-950 font-black uppercase text-[10px] tracking-widest mb-8 transition-all group">
     Retour aux annonces
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <div class="lg:col-span-1">
            <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100 sticky top-10">
                <div class="flex flex-col items-center text-center">
                    <div class="w-24 h-24 bg-blue-50 text-blue-950 rounded-[2rem] flex items-center justify-center text-4xl mb-4 border-4 border-white shadow-lg">
                        👤
                    </div>
                    <h2 class="text-xl font-black text-blue-950 uppercase italic leading-tight">{{ $offer->client->name }}</h2>
                    <p class="text-orange-500 font-black text-[10px] uppercase tracking-widest mt-1">Propriétaire de l'annonce</p>

                    <div class="w-full h-px bg-gray-50 my-6"></div>

                    <div class="w-full space-y-5 text-left">
                        <div>
                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-tighter">Téléphone Direct</p>
                            <p class="text-sm font-black text-blue-950 italic">{{ $offer->client->phone ?? '06XXXXXXXX' }}</p>
                        </div>
                        <div>
                            <p class="text-[9px] font-black text-gray-400 uppercase tracking-tighter">Email de contact</p>
                            <p class="text-sm font-black text-blue-950 italic truncate">{{ $offer->client->email }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 space-y-8">

            <div class="bg-white rounded-[3rem] p-10 shadow-sm border border-gray-100 relative overflow-hidden">

                <span class="bg-blue-950 text-white text-[9px] font-black uppercase px-4 py-1.5 rounded-full mb-6 inline-block tracking-widest">
                    {{ $offer->category->name ?? 'Général' }}
                </span>

                <h1 class="text-4xl font-black text-blue-950 uppercase italic leading-none mb-8 tracking-tighter">
                    {{ $offer->title }}
                </h1>

                <div class="grid grid-cols-2 gap-10 mb-10">
                    <div class="relative pl-6 border-l-4 border-orange-500">
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Point de Départ</p>
                        <p class="text-xl font-black text-blue-950 italic tracking-tighter">{{ $offer->departureCity }}</p>
                    </div>
                    <div class="relative pl-6 border-l-4 border-blue-950">
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Destination</p>
                        <p class="text-xl font-black text-blue-950 italic tracking-tighter">{{ $offer->arrivalCity }}</p>
                    </div>
                </div>



    <div class="grid grid-cols-2 gap-6">
            <p class="text-[8px] font-black text-orange-500 uppercase tracking-widest mb-1">Date de ramassage</p>
            <p class="text-sm font-black text-blue-950 italic">
                {{$offer->departure_date}}
            </p>


            <p class="text-[8px] font-black text-blue-900 uppercase tracking-widest mb-1">Livraison souhaitée</p>
            <p class="text-sm font-black text-blue-950 italic mb-6">
                {{ $offer->arrival_date}}
            </p>

    </div>



                <div class="flex gap-12 mb-10">
                    <div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Poids estimé</p>
                        <p class="text-2xl font-black text-orange-500 italic">{{ $offer->weight }} <span class="text-sm">KG</span></p>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Statut</p>
                        <p class="text-lg font-black text-blue-950 uppercase italic tracking-tighter">{{ $offer->status }}</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-[2rem] p-8">
                    <p class="text-[10px] font-black text-blue-950 uppercase tracking-[0.2em] mb-4 italic">Description de la marchandise :</p>
                    <p class="text-gray-600 font-bold italic leading-relaxed text-sm">
                        {{ $offer->description ?? 'Aucune description supplémentaire fournie par le client.' }}
                    </p>
                </div>
            </div>

            @if(Auth::user()->role->name === 'livrer')
            <div class="bg-blue-950 rounded-[3rem] p-10 shadow-2xl text-white">
                <div class="flex items-center gap-4 mb-8">
                    <h2 class="text-2xl font-black uppercase italic tracking-tighter">Proposer vos <span class="text-orange-500">Services</span></h2>
                </div>

                <form action="{{ route('proposals.store') }}" method="POST" class="space-y-6">
    @csrf
    <input type="hidden" name="offer_id" value="{{ $offer->id }}">

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="md:col-span-1">
            <label class="block text-[10px] font-black uppercase tracking-widest mb-3 opacity-60 italic text-white">Votre Prix (DH)</label>
            <input type="number" name="price" placeholder="0.00" required
                class="w-full bg-white/10 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition text-white font-black text-xl placeholder:text-white/20 outline-none">
        </div>

        <div class="md:col-span-1">
            <label class="block text-[10px] font-black uppercase tracking-widest mb-3 opacity-60 italic text-white">Véhicule</label>
            <select name="vehicle_type" required
                class="w-full bg-white/10 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition text-white font-bold italic appearance-none cursor-pointer outline-none">
                <option value="" class="text-blue-950">Choisir...</option>
                <option value="Petit Utilitaire" class="text-blue-950">texe</option>
                <option value="Fourgon / Transit" class="text-blue-950">voiture</option>
                <option value="Camionnette 3.5t" class="text-blue-950">Camion</option>
                <option value="Poids Lourd" class="text-blue-950">grosse voiture</option>
                <option value="Remorque" class="text-blue-950">bus</option>
            </select>
        </div>

        <div class="md:col-span-2">
            <label class="block text-[10px] font-black uppercase tracking-widest mb-3 opacity-60 italic text-white">Note (Optionnel)</label>
            <input type="text" name="note" placeholder="Ex:"
                class="w-full bg-white/10 border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-orange-500 transition text-white font-bold italic placeholder:text-white/20 outline-none">
        </div>
    </div>

    <button type="submit" class="w-full bg-orange-500 hover:bg-white hover:text-blue-950 text-white font-black py-5 rounded-[1.5rem] shadow-xl transition-all duration-300 uppercase italic tracking-widest flex items-center justify-center gap-3 transform hover:scale-[1.02]">
        <span>Envoyer ma proposition</span>
    </button>
</form>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection
