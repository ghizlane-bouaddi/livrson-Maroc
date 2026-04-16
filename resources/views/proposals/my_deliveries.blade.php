 {{-- @extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">

    <div class="mb-12">
        <h1 class="text-4xl font-black text-blue-950 uppercase italic tracking-tighter">
            Mes <span class="text-orange-500 underline decoration-4 underline-offset-8">Livraisons</span> Confirmées
        </h1>
        <p class="text-gray-400 font-black italic text-[10px] uppercase tracking-[0.4em] mt-3">
            Liste des marchandises que vous devez transporter
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @forelse($proposals as $proposal)
            <div class="bg-white rounded-[3rem] border-2 border-green-500 p-8 shadow-xl relative overflow-hidden group">

                <div class="absolute top-0 right-10">
                    <span class="bg-green-500 text-white text-[9px] font-black uppercase px-4 py-1.5 rounded-b-xl tracking-widest">
                        ✅ Confirmé
                    </span>
                </div>

                <div class="mb-6">
                    <p class="text-[10px] font-black text-orange-500 uppercase tracking-widest mb-1 italic">Marchandise :</p>
                    <h3 class="text-2xl font-black text-blue-950 uppercase italic leading-none">{{ $proposal->offer->title }}</h3>
                </div>

                <div class="bg-gray-50 rounded-3xl p-6 mb-6 flex justify-between items-center">
                    <div>
                        <p class="text-[8px] font-black text-gray-400 uppercase tracking-tighter">De :</p>
                        <p class="text-sm font-black text-blue-950">{{ $proposal->offer->departureCity }}</p>
                    </div>
                    <div class="text-orange-500 font-black">➔</div>
                    <div class="text-right">
                        <p class="text-[8px] font-black text-gray-400 uppercase tracking-tighter">À :</p>
                        <p class="text-sm font-black text-blue-950">{{ $proposal->offer->arrivalCity }}</p>
                    </div>
                </div>

                <div class="border-t border-gray-100 pt-6">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-blue-50 text-blue-950 rounded-2xl flex items-center justify-center text-xl shadow-inner">👤</div>
                        <div>
                            <p class="text-[9px] font-black text-gray-400 uppercase">Client :</p>
                            <p class="text-sm font-black text-blue-950 italic">{{ $proposal->offer->client->name }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <a href="tel:{{ $proposal->offer->client->phone }}" class="flex items-center justify-center gap-2 bg-blue-950 hover:bg-orange-500 text-white font-black py-4 rounded-2xl text-[10px] uppercase transition-all italic tracking-widest shadow-lg">
                            <span>📞 Appeler</span>
                        </a>
                        <a href="{{ route('offers.show', $proposal->offer->id) }}" class="flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-blue-950 font-black py-4 rounded-2xl text-[10px] uppercase transition-all italic tracking-widest">
                            <span>Détails</span>
                        </a>
                    </div>
                </div>

                <div class="absolute bottom-6 right-8 opacity-10 group-hover:opacity-100 transition-opacity">
                    <p class="text-[8px] font-black text-gray-400 uppercase text-right">Prix Final</p>
                    <p class="text-2xl font-black text-blue-950 italic">{{ $proposal->price }} DH</p>
                </div>
            </div>
        @empty
            <div class="col-span-full py-20 text-center bg-white rounded-[4rem] border-4 border-dashed border-gray-50">
                <p class="text-gray-400 font-black italic uppercase tracking-[0.3em] text-sm">
                    Aucune livraison confirmée pour le moment.
                    <br>
                    <span class="text-[10px] lowercase italic mt-2 inline-block">Proposez vos prix sur les offres disponibles !</span>
                </p>
            </div>
        @endforelse
    </div>
</div>
@endsection --}}



