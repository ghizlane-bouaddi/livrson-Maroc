@extends('layouts.app')

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
@endsection
