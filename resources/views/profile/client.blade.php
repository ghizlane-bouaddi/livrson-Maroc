@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">

        <div class="bg-white rounded-[3rem] shadow-2xl shadow-gray-200/50 p-8 md:p-12 border border-gray-50 mb-12">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">

                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-32 h-32 bg-blue-950 rounded-[2.5rem] flex items-center justify-center text-4xl font-black italic shadow-2xl border-4 border-white/10 text-white">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                    <div class="text-center md:text-left">
                        <h1 class="text-3xl font-black uppercase italic tracking-tighter text-blue-950">{{ auth()->user()->name }}</h1>
                        <div class="mt-4 space-y-2">
                            <div class="flex items-center gap-2 text-gray-500 font-bold text-sm uppercase italic">
                                {{ auth()->user()->email }}
                            </div>
                            <div class="flex items-center gap-2 text-gray-500 font-bold text-sm uppercase italic">
                                 {{ auth()->user()->phone ?? '06XXXXXXXX' }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <h2 class="text-2xl font-black text-blue-950 uppercase italic pl-4 mb-8">
            Historique de mes offres
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse(auth()->user()->offers as $offer)
                <div class="bg-white rounded-[2.5rem] p-6 border border-gray-100 shadow-xl hover:shadow-2xl transition-all relative overflow-hidden group">


                    <h3 class="font-black text-blue-950 text-lg uppercase mb-4 group-hover:text-orange-500 transition-colors">
                        {{ $offer->title }}
                    </h3>

                    <div class="space-y-2 mb-6">
                        <div class="flex items-center gap-2">
                            <p class="text-xs font-bold text-gray-600 italic">{{ $offer->departureCity }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="text-xs font-bold text-gray-600 italic">{{ $offer->arrivalCity }}</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-gray-50 flex justify-between items-center">
                        <a href="{{ route('offers.show', $offer->id) }}" class="w-8 h-8 bg-gray-50 rounded-lg flex items-center justify-center text-blue-950 hover:bg-orange-500 hover:text-white transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-12 text-center">
                    <p class="text-gray-400 font-black uppercase italic">Aucune offre publiée pour le moment.</p>
                </div>
            @endforelse
        </div>

    </div>
</div>
@endsection
