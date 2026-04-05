<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livrson Maroc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow-md p-4 mb-6">
        <div class="container mx-auto flex justify-between items-center">
            {{-- <a href="{{ route('offres.index') }}" class="text-2xl font-bold text-blue-600"> --}}
                {{-- Livrson Maroc
            </a> --}}
            <a href="{{ route('welcome') }}" class="text-2xl font-black text-blue-900 uppercase italic">Livrson<span class="text-orange-500">Maroc</span></a>
            <div class="flex items-center gap-6">
                {{-- <a href="{{ route('offres.index') }}" class="text-gray-700 hover:text-blue-500">Offres</a> --}}

                @auth
                    {{-- <a href="{{ route('profile.show') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">
                         profile
                    </a> --}}
                    {{-- <a href="{{ route('profile') }}" class="text-gray-700 hover:text-blue-500">Offres</a> --}}

                    <span class="text-gray-300">|</span>

                    <span class="text-sm font-medium text-gray-600">Bonjour,</span>

                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 text-sm font-bold hover:underline">
                            Déconnexion
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500">Connexion</a>
                    <a href="{{ route('register') }}" class="border border-blue-600 text-blue-600 px-4 py-1 rounded-lg hover:bg-blue-50">
                        Inscription
                    </a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content') </main>

</body>
</html>
