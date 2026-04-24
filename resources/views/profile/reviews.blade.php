@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">

        {{-- Header: معلومات الكليان اللي غنتقيموه --}}
        <div class="bg-white rounded-[2.5rem] p-8 shadow-xl border border-gray-50 mb-10">
            <div class="flex items-center gap-6">
                <div class="w-20 h-20 bg-orange-500 rounded-2xl flex items-center justify-center text-2xl font-black italic text-white shadow-lg">
                    {{ substr($client->name, 0, 1) }}
                </div>
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Évaluation du Client</p>
                    <h1 class="text-2xl font-black text-blue-950 uppercase italic tracking-tighter">{{ $client->name }}</h1>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- الجهة اليسرى: فورم لإضافة تعليق (كتبان غير للفرور) --}}
            @if(auth()->user()->role->name === 'livreur')
            <div class="md:col-span-1">
                <div class="bg-blue-950 rounded-[2rem] p-6 text-white shadow-2xl sticky top-24">
                    <h3 class="font-black uppercase italic text-sm mb-6 border-l-4 border-orange-500 pl-3 text-orange-400">Laisser un avis</h3>

                    {{-- <form action="#" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="text-[9px] font-black uppercase tracking-widest opacity-60">Note / 5</label>
                            <select class="w-full mt-1 bg-white/10 border-none rounded-xl text-sm font-bold focus:ring-2 focus:ring-orange-500 text-white">
                                <option class="text-blue-950" value="5">⭐⭐⭐⭐⭐ (5/5)</option>
                                <option class="text-blue-950" value="4">⭐⭐⭐⭐ (4/5)</option>
                                <option class="text-blue-950" value="3">⭐⭐⭐ (3/5)</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-[9px] font-black uppercase tracking-widest opacity-60">Commentaire</label>
                            <textarea rows="4" class="w-full mt-1 bg-white/10 border-none rounded-xl text-sm font-bold focus:ring-2 focus:ring-orange-500 placeholder:text-white/20" placeholder="Comment s'est passé la remise du colis ?"></textarea>
                        </div>
                        <button class="w-full bg-orange-500 hover:bg-white hover:text-blue-950 transition-all py-3 rounded-xl font-black uppercase text-[10px] tracking-widest shadow-lg">
                            Publier l'avis
                        </button>
                    </form> --}}




        <form action="{{ route('reviews.store', $client->id) }}" method="POST" class="space-y-4">
    @csrf
    {{-- نجيبو آخر proposal بين هاد اللفرور وهاد الكليان باش نربطو به التقييم --}}
    @php
        $lastProposal = \App\Models\Proposal::where('livreur_id', auth()->id())
                        ->whereHas('offer', function($q) use ($client) {
                            $q->where('user_id', $client->id);
                        })->latest()->first();
    @endphp

    @if($lastProposal)
        <input type="hidden" name="proposal_id" value="{{ $lastProposal->id }}">
    @endif

    <div>
        <label class="text-[9px] font-black uppercase tracking-widest opacity-60">Note / 5</label>
        <select name="rating" class="w-full mt-1 bg-white/10 border-none rounded-xl text-sm font-bold text-white">
            <option value="5" class="text-blue-950">⭐⭐⭐⭐⭐ (5/5)</option>
            <option value="4" class="text-blue-950">⭐⭐⭐⭐ (4/5)</option>
            <option value="3" class="text-blue-950">⭐⭐⭐ (3/5)</option>
        </select>
    </div>

    <div>
        <label class="text-[9px] font-black uppercase tracking-widest opacity-60">Commentaire</label>
        <textarea name="comment" rows="4" class="w-full mt-1 bg-white/10 border-none rounded-xl text-sm font-bold text-white" placeholder="Votre expérience avec ce client..."></textarea>
    </div>

    <button type="submit" class="w-full bg-orange-500 hover:bg-white hover:text-blue-950 transition-all py-3 rounded-xl font-black uppercase text-[10px]">
        Publier l'avis
    </button>
</form>






                </div>
            </div>
            @endif

            {{-- الجهة اليمنى: قائمة التعليقات --}}
            <div class="{{ auth()->user()->role->name === 'livreur' ? 'md:col-span-2' : 'md:col-span-3' }}">
                <h3 class="text-xl font-black text-blue-950 uppercase italic mb-6">Commentaires récents</h3>

                <div class="space-y-4">
                    {{-- تعليق تجريبي (حتى تريكل الداتابيز) --}}
                    <div class="bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm relative overflow-hidden">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center text-[10px] font-black text-blue-950">JD</div>
                                <div>
                                    <p class="text-[10px] font-black text-blue-950 uppercase">Jawad Delivery</p>
                                    <p class="text-[8px] font-bold text-gray-400 italic">Il y a 2 jours</p>
                                </div>
                            </div>
                            <div class="text-orange-500 text-xs">⭐⭐⭐⭐⭐</div>
                        </div>
                        <p class="text-gray-600 text-xs font-bold italic leading-relaxed">
                            "Client très ponctuel et sympathique. La communication était fluide, je recommande !"
                        </p>
                    </div>

                    {{-- إيلا مكان والو --}}
                    {{-- <p class="text-center py-10 text-gray-400 font-black uppercase italic text-xs tracking-widest">Aucun avis pour le moment</p> --}}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
