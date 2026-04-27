@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-black text-blue-950 uppercase italic pl-4 mb-10">
        Mes Livraisons
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($proposals as $proposal)
            @if($proposal->offer)
                @php $offer = $proposal->offer; @endphp
                <div class="bg-white rounded-[2.5rem] p-6 shadow-xl border border-gray-50 relative overflow-hidden transition-all hover:shadow-2xl">

                    <div class="flex justify-between items-start mb-6">

                    </div>

                    <h3 class="font-black text-blue-950 text-xl uppercase mb-4 leading-tight">{{ $offer->title }}</h3>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <p class="text-sm font-bold text-blue-900">{{ $offer->departureCity }}</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <p class="text-sm font-bold text-blue-900">{{ $offer->arrivalCity }}</p>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-100 flex justify-between items-center">
                        <div>
                            <p class="text-[10px] text-gray-400 font-black uppercase tracking-tighter">Prix Fixé</p>
                            <p class="text-xl font-black text-orange-500">{{ $proposal->price }} DH</p>
                        </div>

                        <div class="flex gap-2">
                            @if($offer->status == 'closed')

                                <form action="{{ route('proposals.start', $proposal->id) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="bg-blue-950 text-white px-5 py-2.5 rounded-xl text-[10px] font-black uppercase hover:bg-orange-500 transition-all shadow-lg shadow-blue-100">
                                        Démarrer
                                    </button>
                                </form>
                            @elseif($offer->status == 'on_the_way')

                                <form action="{{ route('proposals.confirm', $proposal->id) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="bg-green-500 text-white px-5 py-2.5 rounded-xl text-[10px] font-black uppercase hover:scale-105 transition-all shadow-lg shadow-green-100">
                                        Arrivé
                                    </button>
                                </form>
                            @elseif($offer->status == 'delivered')

                                <div class="flex flex-col items-end">
                                    <span class="text-green-600 font-black text-[9px] uppercase bg-green-50 px-3 py-1.5 rounded-lg border border-green-100">
                                        Terminée
                                    </span>

                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
