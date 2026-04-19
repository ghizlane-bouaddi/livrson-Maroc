@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">

    <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-8 text-center md:text-left">
        <div>
            <h1 class="text-5xl font-black text-blue-950 uppercase italic tracking-tighter leading-none mb-3">
                @if(Auth::user()->role->name === 'client')
                    Mes <span class="text-orange-500 underline decoration-4 underline-offset-8">Expéditions</span>
                @else
                    Offres <span class="text-orange-500 underline decoration-4 underline-offset-8">Disponibles</span>
                @endif
            </h1>
            <p class="text-gray-400 font-black italic text-[10px] uppercase tracking-[0.4em] ml-1">
                {{ Auth::user()->role->name === 'client' ? 'Gestion de vos annonces de livraison' : 'Trouvez des marchandises à transporter' }}
            </p>
        </div>

        @if(Auth::user()->role->name === 'client')
            <a href="{{ route('offers.create') }}" class="bg-blue-950 hover:bg-orange-500 text-white font-black py-5 px-10 rounded-[2rem] shadow-xl transform hover:scale-105 transition duration-300 flex items-center gap-4 uppercase italic text-sm tracking-widest">
                <span class="text-2xl font-normal">+</span> Publier une Offre
            </a>
        @endif
    </div>






    @if(Auth::user()->role->name === 'livrer')
    <div class="max-w-5xl mx-auto mb-16">
    <form action="{{ route('offers.index') }}" method="GET" class="bg-white p-3 pl-8 rounded-full shadow-xl border border-gray-100 flex flex-col md:flex-row items-center gap-4 group transition-all hover:shadow-2xl">

        <div class="flex-1 flex items-center gap-3 w-full">
            <span class="text-orange-500 text-xs italic font-black uppercase tracking-tighter">De:</span>
            <input type="text" name="departure_city" value="{{ request('departure_city') }}" placeholder="Ville départ..."
                class="w-full bg-transparent border-none focus:ring-0 focus:outline-none font-bold italic text-sm text-blue-950 placeholder-gray-300">
        </div>

        <div class="hidden md:block w-px h-8 bg-gray-100"></div>

        <div class="flex-1 flex items-center gap-3 w-full">
            <span class="text-blue-950 text-xs italic font-black uppercase tracking-tighter">À:</span>
            <input type="text" name="arrival_city" value="{{ request('arrival_city') }}" placeholder="Ville arrivée..."
                class="w-full bg-transparent border-none focus:ring-0 focus:outline-none font-bold italic text-sm text-blue-950 placeholder-gray-300">
        </div>

        <button type="submit" class="w-full md:w-auto bg-blue-950 hover:bg-orange-500 text-white font-black py-4 px-10 rounded-full transition-all duration-300 uppercase italic text-[10px] tracking-widest flex items-center justify-center gap-2">
            <span>Rechercher</span>

        </button>


    </form>
</div>
@endif
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
        @forelse($offers as $offer)
            <div class="bg-white rounded-[3rem] border border-gray-100 shadow-[0_10px_50px_rgba(0,0,0,0.03)] hover:shadow-2xl transition-all duration-700 p-10 relative overflow-hidden group">

                <div class="absolute top-8 right-8">
                    <span class="bg-blue-50 text-blue-900 text-[9px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full border border-blue-100">
                        {{ $offer->status }}
                    </span>
                </div>

                @if(Auth::user()->role->name === 'client' && $offer->user_id === Auth::id())
                    <div class="absolute top-8 left-8">
                        <a href="{{ route('proposals.index', ['offer_id' => $offer->id]) }}"
                           class="flex items-center gap-2 bg-orange-500 text-white text-[9px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-lg shadow-orange-200 hover:bg-blue-950 transition-all duration-300 transform hover:scale-105">
                            <span class="animate-pulse">🔔</span>
                            <span>{{ $offer->proposals->count() }} Offres</span>
                        </a>
                    </div>
                @endif


                <div class="mb-8 mt-10">
                    <div class="w-full h-44 bg-gray-50 rounded-[2.5rem] flex items-center justify-center overflow-hidden shadow-inner mb-6 group-hover:scale-[1.02] transition-transform duration-500">
                        @if($offer->image)
                            <img src="{{ $offer->image }}" alt="{{ $offer->title }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-5xl opacity-20">📦</span>
                        @endif
                    </div>
                    <h3 class="text-2xl font-black text-blue-950 uppercase italic leading-tight mb-2 truncate">{{ $offer->title }}</h3>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">
                        Expédié par: <span class="text-orange-500">{{ $offer->user->name ?? 'Client' }}</span>
                    </p>
                </div>


                <div class="space-y-5 mb-10 border-l-2 border-dashed border-gray-100 ml-2 pl-6 relative">
                    <div class="flex items-center gap-5">
                        <div class="absolute -left-[7px] w-3 h-3 bg-orange-500 rounded-full shadow-[0_0_10px_#f97316]"></div>
                        <div>
                            <p class="text-[9px] text-gray-400 font-black uppercase tracking-tighter">Départ</p>
                            <p class="text-base font-black text-blue-950 italic">{{ $offer->departureCity }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5 pt-4">
                        <div class="absolute -left-[7px] w-3 h-3 bg-blue-900 rounded-full shadow-[0_0_10px_#1e3a8a]"></div>
                        <div>
                            <p class="text-[9px] text-gray-400 font-black uppercase tracking-tighter">Arrivée</p>
                            <p class="text-base font-black text-blue-950 italic">{{ $offer->arrivalCity }}</p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center pt-8 mt-4 border-t border-gray-50">
                        <div class="text-center">
                            <p class="text-[9px] text-gray-400 font-black uppercase italic tracking-tighter">Poids</p>
                            <p class="font-black text-blue-950 text-lg">{{ $offer->weight }} KG</p>
                        </div>
                        <div class="w-px h-8 bg-gray-100"></div>
                        <div class="text-center">
                            <p class="text-[9px] text-gray-400 font-black uppercase italic tracking-tighter">Catégorie</p>
                            <p class="font-black text-blue-950 text-xs italic">{{ $offer->category->name ?? 'Général' }}</p>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    @if(Auth::user()->role->name === 'livrer')
                        <a href="{{ route('offers.show', $offer->id) }}"
                           class="w-full bg-orange-500 hover:bg-blue-950 text-white font-black py-5 rounded-[1.5rem] text-[10px] uppercase transition-all duration-500 text-center shadow-lg italic tracking-widest flex items-center justify-center gap-3 transform hover:-translate-y-1">

                            <span>Voir les détails & Proposer</span>
                        </a>
                    @elseif(Auth::user()->role->name === 'client' && $offer->user_id === Auth::id())
                        <div class="grid grid-cols-2 gap-4">
                            <a href="{{ route('offers.edit', $offer) }}" class="bg-blue-50 hover:bg-blue-950 hover:text-white text-blue-950 font-black py-4 rounded-2xl text-[9px] uppercase transition-all text-center italic tracking-widest shadow-sm">
                                Modifier
                            </a>
                            <form action="{{ route('offers.destroy', $offer) }}" method="POST" onsubmit="return confirm('Supprimer définitivement cette offre ?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-full bg-red-50 hover:bg-red-500 hover:text-white text-red-500 font-black py-4 rounded-2xl text-[9px] uppercase transition-all italic tracking-widest shadow-sm text-center">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    @endif
                </div>

            </div>
        @empty

        @endforelse
    </div>
</div>
@endsection

