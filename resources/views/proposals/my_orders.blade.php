@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-black text-blue-950 uppercase italic border-l-8 border-orange-500 pl-4 mb-10">
        Suivi de mes commandes
    </h1>


    <div class="bg-[#1a234e] text-white rounded-full px-8 py-4 flex justify-between items-center shadow-lg mb-6 hidden lg:flex">
        <div class="w-1/6 text-[10px] font-black uppercase tracking-widest italic">Offre</div>
        <div class="w-1/6 text-[10px] font-black uppercase tracking-widest italic">Transporteur</div>
        <div class="w-1/6 text-center text-[10px] font-black uppercase tracking-widest italic text-orange-500">Départ</div>
        <div class="w-1/6 text-center text-[10px] font-black uppercase tracking-widest italic text-green-500">Arrivée</div>
        <div class="w-1/6 text-center text-[10px] font-black uppercase tracking-widest italic">Prix</div>
        <div class="w-1/6 text-right text-[10px] font-black uppercase tracking-widest italic">Status</div>
    </div>


    <div class="space-y-4">
        @foreach($offers as $offer)
            @php
                $acceptedProposal = $offer->proposals
                    ->whereIn('status', ['accepted', 'delivered'])
                    ->first();
            @endphp

            @if($acceptedProposal)
            <div class="bg-white rounded-full px-8 py-6 flex flex-col lg:flex-row justify-between items-center shadow-sm border border-gray-100 hover:shadow-md transition-shadow">


                <div class="w-full lg:w-1/6">
                    <p class="font-black text-blue-950 text-sm uppercase italic truncate">{{ $offer->title }}</p>
                    <p class="text-[8px] text-gray-400 font-bold tracking-widest">ID: #{{ $offer->id }}</p>
                </div>

                <div class="w-full lg:w-1/6 flex items-center gap-2">
                    <p class="font-black text-orange-500 text-xs uppercase">{{ $acceptedProposal->livreur->name }}</p>
                </div>


                <div class="w-full lg:w-1/6 text-center">
                    <div class="inline-block px-4 py-1 rounded-full {{ $offer->status == 'on_the_way' || $offer->status == 'delivered' ? 'bg-orange-500 text-white' : 'bg-gray-50 text-gray-400' }} transition-colors">
                        <p class="text-[9px] font-black uppercase italic">{{ $offer->departureCity }}</p>
                        <p class="text-[8px] font-bold">{{ $offer->departure_date }}</p>
                    </div>
                </div>


                <div class="w-full lg:w-1/6 text-center">
                    <div class="inline-block px-4 py-1 rounded-full {{ $offer->status == 'delivered' ? 'bg-green-500 text-white' : 'bg-gray-50 text-gray-400' }} transition-colors">
                        <p class="text-[9px] font-black uppercase italic">{{ $offer->arrivalCity }}</p>
                        <p class="text-[8px] font-bold">{{ $offer->arrival_date}}</p>
                    </div>
                </div>


                <div class="w-full lg:w-1/6 text-center">
                    <p class="font-black text-blue-950 text-lg italic tracking-tighter">{{ $acceptedProposal->price }} <span class="text-[10px] text-orange-500">DH</span></p>
                </div>


                <div class="w-full lg:w-1/6 text-right">
                    <span class="text-[9px] font-black uppercase tracking-tighter px-4 py-1.5 rounded-full shadow-sm border
                        {{ $offer->status == 'delivered' ? 'bg-green-50 border-green-200 text-green-600' : 'bg-orange-50 border-orange-200 text-orange-600' }}">
                        {{$offer->status }}
                    </span>
                </div>
            </div>
            @endif
        @endforeach
    </div>

    
</div>
@endsection
