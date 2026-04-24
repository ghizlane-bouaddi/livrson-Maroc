{{-- @extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-10">

<div class="max-w-6xl mx-auto px-6">


    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">
            {{ $title }}
        </h1>

        <span class="bg-orange-600 text-white text-xs px-4 py-1.5 rounded-full shadow">
            {{ $users->count() }} utilisateurs
        </span>
    </div>


    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden">

        <table class="w-full text-sm text-left">


            <thead class="bg-blue-950 text-white">
                <tr>
                    <th class="px-6 py-4 font-semibold">Utilisateur</th>
                    <th class="px-6 py-4 font-semibold">Email</th>
                    <th class="px-6 py-4 text-center font-semibold">Rôle</th>
                    <th class="px-6 py-4 text-right font-semibold">Actions</th>
                </tr>
            </thead>


            <tbody class="divide-y divide-gray-100">
                @forelse($users as $user)
                <tr class="hover:bg-blue-50 transition">


                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">
                                    {{ $user->name }}
                                </p>
                                <p class="text-xs text-gray-400">
                                    Actif
                                </p>
                            </div>
                        </div>
                    </td>


                    <td class="px-6 py-4 text-gray-600">
                        {{ $user->email }}
                    </td>


                    <td class="px-6 py-4 text-center">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full
                            @if($user->role->name == 'admin')
                                bg-green-100 text-green-600
                            @else
                                bg-orange-100 text-orange-600
                            @endif
                        ">
                            {{ $user->role->name }}
                        </span>
                    </td>


                    <td class="px-6 py-4 text-right">
                        <button class="text-blue-600 hover:text-blue-800 text-sm mr-3 font-medium">
                            Voir
                        </button>
                        <button class="text-red-500 hover:text-red-700 text-sm font-medium">
                            Suspendre
                        </button>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-8 text-gray-400">
                        Aucun utilisateur trouvé
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header Section --}}
        <div class="flex justify-between items-end mb-10 border-l-8 border-orange-500 pl-6">
            <div>
                <h1 class="text-4xl font-black text-blue-950 uppercase italic tracking-tighter leading-none">
                    Gestion des <span class="text-orange-500">utilisateurs</span>
                </h1>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.3em] mt-2 italic">Contrôle d'accès & Statut des comptes</p>
            </div>

            <div class="bg-blue-950 text-white px-6 py-2 rounded-2xl shadow-xl shadow-blue-900/20">
                <span class="text-xs font-black uppercase tracking-widest italic">{{ $users->count() }} Membres</span>
            </div>
        </div>

        {{-- Table Container --}}
        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-blue-950 text-white uppercase text-[11px] font-black tracking-[0.15em] italic">
                        <th class="px-8 py-6">Profil Utilisateur</th>
                        <th class="px-8 py-6">Contact Email</th>
                        <th class="px-8 py-6 text-center">Rôle</th>
                        <th class="px-8 py-6 text-center">Statut</th>
                        <th class="px-8 py-6 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-50">
                    @forelse($users as $user)
                    <tr class="hover:bg-blue-50/30 transition-all duration-300 group">


                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">

                                <div>
                                    <p class="font-black text-blue-950 uppercase italic text-sm tracking-tighter">{{ $user->name }}</p>
                                    <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">ID: #00{{ $user->id }}</p>
                                </div>
                            </div>
                        </td>


                        <td class="px-8 py-6">
                            <span class="text-xs font-bold text-gray-600 italic">{{ $user->email }}</span>
                        </td>


                        <td class="px-8 py-6 text-center">
                            <span class="px-4 py-1.5 text-[9px] font-black uppercase tracking-widest rounded-full border
                                {{ $user->role->name == 'admin' ? 'bg-blue-50 text-blue-900 border-blue-100' : 'bg-orange-50 text-orange-600 border-orange-100' }}">
                                {{ $user->role->name }}
                            </span>
                        </td>

                        {{-- Status Indicator --}}
                        <td class="px-8 py-6 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <div class="w-2 h-2 rounded-full {{ $user->is_active ? 'bg-green-500 animate-pulse' : 'bg-red-500' }}"></div>
                                <span class="text-[9px] font-black uppercase {{ $user->is_active ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $user->is_active ? 'Actif' : 'Banni' }}
                                </span>
                            </div>
                        </td>


                        <td class="px-8 py-6 text-right">
                            <div class="flex justify-end items-center gap-3">

                                <form action="" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir modifier le statut de cet utilisateur ?')">
                                    @csrf
                                    @if($user->is_active)
                                        <button type="submit" class="bg-red-50 text-red-600 text-[10px] font-black uppercase px-5 py-2 rounded-xl border border-red-100 hover:bg-red-600 hover:text-white transition-all duration-300 italic shadow-sm">
                                            Suspendre / Bannir
                                        </button>
                                    @else
                                        <button type="submit" class="bg-green-50 text-green-600 text-[10px] font-black uppercase px-5 py-2 rounded-xl border border-green-100 hover:bg-green-600 hover:text-white transition-all duration-300 italic shadow-sm">
                                            Réactiver Compte
                                        </button>
                                    @endif
                                </form>


                            </div>
                        </td>

                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
