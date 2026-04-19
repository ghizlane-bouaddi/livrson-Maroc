@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-black text-blue-950 uppercase italic border-l-8 border-orange-500 pl-4 mb-10">
        Suivi de mes commandes
    </h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        @foreach($offers as $offer)
            @php
                $acceptedProposal = $offer->proposals
                    ->whereIn('status', ['accepted', 'delivered'])
                    ->first();
            @endphp

            @if($acceptedProposal)
            <div class="bg-white rounded-[2.5rem] p-8 shadow-2xl shadow-gray-200/50 border border-gray-50 relative overflow-hidden">

                <div class="mb-10">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="font-black text-blue-950 text-2xl uppercase tracking-tighter italic">{{ $offer->title }}</h2>

                        <span class="text-[9px] font-black uppercase tracking-widest px-4 py-1 rounded-full {{ $offer->status == 'delivered' ? 'bg-green-100 text-green-600' : 'bg-orange-100 text-orange-600' }}">
                            {{ str_replace('_', ' ', $offer->status) }}
                        </span>
                    </div>

                    <div class="relative py-4">
                        <div class="absolute h-1.5 bg-gray-100 w-full top-1/2 -translate-y-1/2 rounded-full"></div>


                        <div class="absolute h-1.5 bg-orange-500 top-1/2 -translate-y-1/2 rounded-full transition-all duration-1000"
                             style="width: {{ $offer->status == 'delivered' ? '100%' : ($offer->status == 'on_the_way' ? '50%' : '5%') }}">
                        </div>

                        <div class="relative flex justify-between">

                            <div class="text-center">
                                <div class="w-6 h-6 rounded-full bg-orange-500 border-4 border-white shadow mx-auto"></div>
                                <p class="text-[10px] font-black mt-2 text-blue-950 uppercase tracking-tighter italic">Départ</p>

                                <p class="text-[9px] text-orange-500 font-bold mt-1">
                                    {{ $offer->departure_date ? \Carbon\Carbon::parse($offer->departure_date)->format('d/m/Y') : 'À définir' }}
                                </p>
                            </div>


                            <div class="text-center">
                                <div class="w-6 h-6 rounded-full {{ $offer->status == 'on_the_way' || $offer->status == 'delivered' ? 'bg-orange-500' : 'bg-gray-300' }} border-4 border-white shadow mx-auto"></div>
                                <p class="text-[10px] font-black mt-2 text-blue-950 uppercase tracking-tighter italic">En route</p>
                            </div>


                            <div class="text-center">
                                <div class="w-6 h-6 rounded-full {{ $offer->status == 'delivered' ? 'bg-green-500' : 'bg-gray-300' }} border-4 border-white shadow mx-auto"></div>
                                <p class="text-[10px] font-black mt-2 text-blue-950 uppercase tracking-tighter italic">Arrivée</p>

                                <p class="text-[9px] text-blue-900 font-bold mt-1">
                                    {{ $offer->arrival_date ? \Carbon\Carbon::parse($offer->arrival_date)->format('d/m/Y') : 'À définir' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 bg-gray-50 p-6 rounded-[2rem]">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-950 rounded-2xl flex items-center justify-center text-white font-black text-xs uppercase">
                            {{ substr($acceptedProposal->livreur->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Transporteur</p>
                            <p class="font-black text-blue-950 text-sm uppercase">{{ $acceptedProposal->livreur->name }}</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Montant Convenu</p>
                        <p class="font-black text-orange-500 text-2xl uppercase tracking-tighter italic">{{ $acceptedProposal->price }}<span class="text-xs">DH</span></p>
                    </div>
                </div>

                @if($offer->status == 'delivered')
                    <div class="mt-4 flex items-center justify-center gap-2 text-green-600 font-black text-[10px] uppercase tracking-widest">
                        <span>●</span> Livraison Terminée Avec Succès <span>●</span>
                    </div>
                @endif
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection


