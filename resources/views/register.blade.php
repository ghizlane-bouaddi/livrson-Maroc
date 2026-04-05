@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Créer un compte</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Nom complet</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-blue-500" required>
        </div>

        <div class=" mb-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" class="w-full border border-gray-300 p-2 rounded-lg" required>
            </div>
            <div>
                {{-- <label class="block text-sm font-medium text-gray-700">Confirmer</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 p-2 rounded-lg" required>
            </div> --}}
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Téléphone</label>
            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="06..." class="w-full border border-gray-300 p-2 rounded-lg">
        </div>

        {{-- <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Ville</label>
            <select name="ville_id" class="w-full border border-gray-300 p-2 rounded-lg">
                @foreach($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Je suis un :</label>
            <select name="role_id" class="w-full border border-gray-300 p-2 rounded-lg">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-bold hover:bg-blue-700 transition">
            S'inscrire
        </button>
    </form>

    <p class="mt-4 text-center text-sm text-gray-600">
        Déjà inscrit ? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Connectez-vous</a>
    </p>
</div>
@endsection
