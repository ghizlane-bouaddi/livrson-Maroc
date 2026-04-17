@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">

        {{-- الكارت ديال معلومات اللفرور الشخصية --}}
        <div class="bg-white rounded-[3rem] shadow-2xl shadow-gray-200/50 p-8 md:p-12 border border-gray-50 mb-12 relative overflow-hidden">
            {{-- ديكور خفيف بالليموني حيت هادا لفرور --}}
            <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500/5 rounded-full -mr-16 -mt-16"></div>

            <div class="flex flex-col md:flex-row items-center gap-10 relative z-10">
                {{-- الصورة أو الحرف الأول --}}
                <div class="w-32 h-32 bg-orange-500 rounded-[2.5rem] flex items-center justify-center text-4xl font-black italic shadow-2xl border-4 border-white text-white">
                    {{ substr(auth()->user()->name, 0, 1) }}
                </div>

                {{-- التفاصيل الشخصية --}}
                <div class="text-center md:text-left flex-1">
                    <div class="flex items-center gap-3 justify-center md:justify-start">
                        <h1 class="text-3xl font-black uppercase italic tracking-tighter text-blue-950">{{ auth()->user()->name }}</h1>
                        <span class="bg-blue-950 text-[8px] font-black px-3 py-1 rounded-full uppercase text-white italic tracking-widest">Transporteur</span>
                    </div>

                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-2xl flex items-center gap-4 border border-gray-100">
                            <span class="text-xl">📧</span>
                            <div>
                                <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest">Email Professionnel</p>
                                <p class="text-sm font-bold text-blue-950">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-2xl flex items-center gap-4 border border-gray-100">
                            <span class="text-xl">📞</span>
                            <div>
                                <p class="text-[8px] font-black text-gray-400 uppercase tracking-widest">Numéro de Téléphone</p>
                                <p class="text-sm font-bold text-blue-950">{{ auth()->user()->phone ?? 'Non renseigné' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- إحصائية سريعة --}}
                <div class="bg-blue-950 p-6 rounded-[2rem] text-center min-w-[150px]">
                    <p class="text-[9px] font-black text-orange-400 uppercase tracking-[0.2em] mb-1">Livraisons</p>
                    <p class="text-3xl font-black text-white italic">{{ auth()->user()->proposals->where('status', 'delivered')->count() }}</p>
                </div>
            </div>
        </div>

        {{-- العنوان ديال الإرساليات --}}
        <div class="flex items-center gap-4 mb-8">
            <h2 class="text-2xl font-black text-blue-950 uppercase italic tracking-tighter">Historique des Livraisons</h2>
            <div class="h-1 flex-1 bg-gray-100 rounded-full">
                <div class="h-full bg-orange-500 w-20 rounded-full"></div>
            </div>
        </div>

        {{-- ليستة ديال لي كوموند --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse(auth()->user()->proposals->where('status', 'delivered') as $proposal)
                <div class="bg-white rounded-[2.5rem] p-6 border border-gray-100 shadow-xl hover:shadow-orange-100 transition-all group flex items-center gap-6">
                    {{-- أيقونة الكولية --}}
                    <div class="w-16 h-16 bg-gray-50 rounded-2xl flex items-center justify-center text-2xl group-hover:bg-orange-500 group-hover:text-white transition-colors">
                        📦
                    </div>

                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <h3 class="font-black text-blue-950 text-sm uppercase italic mb-1">
                                {{ optional($proposal->offer)->title ?? 'Colis sans titre' }}
                            </h3>
                            <span class="text-[8px] font-bold text-gray-400 uppercase tracking-tighter italic">
                                {{ $proposal->updated_at->format('d/m/Y') }}
                            </span>
                        </div>

                        <div class="flex items-center gap-4 mt-2">
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] text-orange-500">📍</span>
                                <p class="text-[10px] font-bold text-gray-500 uppercase italic">{{ optional($proposal->offer)->departureCity }}</p>
                            </div>
                            <span class="text-gray-300">→</span>
                            <div class="flex items-center gap-1">
                                <span class="text-[10px] text-blue-950">🏁</span>
                                <p class="text-[10px] font-bold text-gray-500 uppercase italic">{{ optional($proposal->offer)->arrivalCity }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 text-center bg-white rounded-[3rem] border-2 border-dashed border-gray-100">
                    <p class="text-gray-400 font-black uppercase italic tracking-widest text-xs">Aucune commande livrée à afficher.</p>
                </div>
            @endforelse
        </div>

    </div>
</div>
@endsection
