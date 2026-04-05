@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center mt-12">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
        <h2 class="text-3xl font-extrabold mb-6 text-center text-gray-800">Connexion</h2>

        @if($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded shadow-sm">
                <p class="font-bold">Erreur:</p>
                <p>{{ $errors->first() }}</p>
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                <input type="email" name="email" placeholder="exemple@mail.com"
                       class="w-full border border-gray-300 p-3 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Mot de passe</label>
                <input type="password" name="password" placeholder="••••••••"
                       class="w-full border border-gray-300 p-3 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required>
            </div>

            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-md transition-all transform hover:scale-[1.02]">
                Se connecter
            </button>
        </form>

        <p class="mt-6 text-center text-gray-500 text-sm">
            Nouveau ici ? <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline">Créer un compte</a>
        </p>
    </div>
</div>
@endsection
