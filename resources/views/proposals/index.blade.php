@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12">

    <div class="mb-12 flex flex-col md:flex-row justify-between items-center gap-6">
        <div>
            <a href="{{ route('offers.index') }}" class="text-blue-950 font-black uppercase text-[10px] tracking-widest mb-4 inline-block transition-all italic group">
                Retour à mes expéditions
            </a>
            <h1 class="text-4xl font-black text-blue-950 uppercase italic tracking-tighter">
                Offres pour : <span class="text-orange-500 underline decoration-4 underline-offset-8">{{ $offer->title }}</span>
            </h1>
            <p class="text-gray-400 font-black italic text-[10px] uppercase tracking-[0.4em] mt-3">
                {{ $offer->departureCity }} {{ $offer->arrivalCity }}  {{ $offer->weight }} KG
            </p>
        </div>

        <div class="bg-blue-950 px-8 py-4 rounded-[2rem] text-white shadow-xl flex items-center gap-4 ">
            <div>
                <p class="text-[9px] font-black uppercase opacity-60 tracking-widest">Total Propositions</p>
                <p class="text-xl font-black italic leading-none">{{ $offer->proposals->count() }} Reçues</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-8">
        @forelse($offer->proposals as $proposal)
            <div class="bg-white rounded-[3rem] border border-gray-100 p-8 shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col lg:flex-row justify-between items-center gap-10 group relative overflow-hidden {{ $proposal->status === 'accepted' ? 'border-2 border-green-500 bg-green-50/30' : '' }}">

                <div class="absolute top-0 right-12">
                    <div class="text-[9px] font-black uppercase px-6 py-1.5 rounded-b-2xl border border-t-0 tracking-widest
                        {{ $proposal->status === 'accepted' ? 'bg-green-500 text-white border-green-600' : 'bg-gray-50 text-blue-950 border-gray-100' }}">
                        {{ $proposal->status }}
                    </div>
                </div>

                <div class="flex items-center gap-8 flex-1 w-full">
                    <div class="w-24 h-24 bg-gray-50 rounded-[2.5rem] flex items-center justify-center text-4xl border-4 border-white shadow-inner group-hover:bg-orange-500 transition-all">
                        👤
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-1">
                            <h3 class="text-2xl font-black text-blue-950 uppercase italic tracking-tighter leading-none">
                                {{ $proposal->livreur->name ?? 'Transporteur Pro' }}
                            </h3>
                            <span class="bg-green-100 text-green-600 text-[8px] font-black uppercase px-2 py-0.5 rounded italic">Vérifié</span>
                        </div>
                        <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mb-4 italic">Transporteur partenaire Livrson.ma</p>

                        @if($proposal->note)
                            <div class="bg-gray-50 p-4 rounded-2xl border-l-4 border-orange-500 max-w-md shadow-inner">
                                <p class="text-xs text-gray-600 font-medium italic leading-relaxed">
                                    "{{ $proposal->note }}"
                                </p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex flex-row lg:flex-col items-center lg:items-end justify-between lg:justify-center w-full lg:w-auto px-6 lg:px-12 border-y lg:border-y-0 lg:border-x border-gray-50 py-6 lg:py-0">
                    <div class="text-center lg:text-right">
                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 italic">Tarif Proposé</p>
                        <p class="text-5xl font-black text-blue-950 italic tracking-tighter leading-none">
                            {{ number_format($proposal->price, 0) }}<span class="text-xl text-orange-500 ml-1 underline underline-offset-4">DH</span>
                        </p>
                        
                    </div>
                </div>

                <div class="flex flex-col gap-3 w-full lg:w-auto min-w-[220px]">
                    @if($offer->status === 'pending')
                        <form action="{{ route('proposals.accept', $proposal->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-blue-950 hover:bg-green-600 text-white font-black py-5 rounded-[1.5rem] shadow-xl transition-all duration-300 uppercase italic tracking-widest text-xs flex items-center justify-center gap-2">
                                <span> Accepter l'offre</span>
                            </button>
                        </form>
                    @elseif($proposal->status === 'accepted')
                        <div class="bg-green-500 text-white text-center py-4 rounded-[1.5rem] font-black uppercase text-[10px] italic tracking-widest shadow-lg">
                          Offre Sélectionnée
                        </div>
                    @endif
                </div>

            </div>
        @empty

        @endforelse
    </div>
</div>
@endsection
