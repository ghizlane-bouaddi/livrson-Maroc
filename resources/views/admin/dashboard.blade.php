@extends('layouts.app')

@section('content')
<div class="p-12 bg-[#f8f9fa] min-h-screen">

    <div class="max-w-7xl mx-auto mb-10">
        <h1 class="text-2xl font-black text-blue-950 uppercase italic border-l-8 border-orange-500 pl-4">
            Statistiques des Commandes
        </h1>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center h-44 transition-all hover:shadow-md">
            <div>
                <p class="text-gray-500 text-lg font-medium mb-2 uppercase tracking-tight">Produits Livrés</p>
                <h3 class="text-5xl font-black text-[#198754] italic">{{ $delivered }}</h3>
            </div>
            <div class="w-16 h-16 bg-[#e8f5e9] rounded-full flex items-center justify-center text-[#198754] text-3xl shadow-inner">
                ✅
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center h-44 transition-all hover:shadow-md">
            <div>
                <p class="text-gray-500 text-lg font-medium mb-2 uppercase tracking-tight">En Attente</p>
                <h3 class="text-5xl font-black text-[#b47c00] italic">{{ $pending }}</h3>
            </div>
            <div class="w-16 h-16 bg-[#fff9db] rounded-full flex items-center justify-center text-[#fab005] text-3xl shadow-inner">
                ⏳
            </div>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center h-44 transition-all hover:shadow-md">
            <div>
                <p class="text-gray-500 text-lg font-medium mb-2 uppercase tracking-tight">Non Livrés</p>
                <h3 class="text-5xl font-black text-[#dc3545] italic">{{ $notDelivered }}</h3>
            </div>
            <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center text-[#dc3545] text-3xl shadow-inner">
                ❌
            </div>
        </div>

    </div>
</div>
@endsection
