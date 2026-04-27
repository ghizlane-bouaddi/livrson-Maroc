<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livrson Maroc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
    <style>
        .logo-font { font-family:  'Arial', 'sans-serif'}
    </style>

</head>
<body class="bg-gray-50 text-gray-900">

    <nav class="bg-white shadow-sm border-b border-gray-100 p-4 mb-10 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">

            <a href="{{ route('welcome') }}" class="logo-font text-2xl font-black text-blue-950 uppercase italic tracking-tighter">
                LivrsonMaroc
            </a>

            <div class="flex items-center gap-8">
                @auth
                    <div class="hidden md:flex items-center gap-6">
                        @if(Auth::user()->role->name === 'client')

                            <a href="{{ route('offers.index') }}" class="text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                Dashboard
                            </a>

                            <a href="{{ route('proposals.my_orders') }}" class="relative text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                Mes Expéditions

                            </a>
                            @elseif(Auth::user()->role->name === 'admin')
                                <a href="{{route('admin.dashboard')}}" class="relative text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                               Admin

                            </a>

                            <a href="{{ route('offers.index') }}" class="text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                les offers
                            </a>

                            <a href="{{ route('admin.index') }}" class="text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                livreurs
                            </a>

                            <a href="{{ route('admin.client') }}" class="text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                client
                            </a>

                        @else

                            <a href="{{ route('offers.index') }}" class="text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                Offres Disponibles
                            </a>
                            <a href="{{ route('livreur.deliveries') }}" class="text-[11px] font-black uppercase tracking-widest text-blue-950 hover:text-orange-500 transition">
                                Mes Livraisons
                            </a>
                        @endif
                    </div>

                    <span class="text-gray-200 hidden md:block">|</span>

                    <div class="flex items-center gap-4">

                        <a href="{{ route('profile.show') }}" class="flex items-center gap-3 group">
                            <div class="text-right leading-none hidden sm:block">
                                <p class="text-[10px] font-black text-blue-950 uppercase italic group-hover:text-orange-500 transition">{{ Auth::user()->name }}</p>
                                <p class="text-[8px] font-bold text-orange-500 uppercase tracking-tighter">{{ Auth::user()->role->name }}</p>
                            </div>
                            <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-950 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300 shadow-sm overflow-hidden">
                                @if(Auth::user()->image)
                                    <img src="{{ asset('storage/'.Auth::user()->image) }}" class="w-full h-full object-cover">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                @endif
                            </div>
                        </a>

                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-50 p-2 rounded-xl text-red-500 hover:bg-red-500 hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="flex items-center gap-4">
                        <a href="{{ route('login') }}" class="text-[11px] font-black uppercase tracking-widest text-gray-500 hover:text-blue-950 transition">Connexion</a>
                        <a href="{{ route('register') }}" class="bg-blue-950 text-white px-6 py-3 rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-lg shadow-blue-900/10 hover:bg-orange-500 transition-all duration-300">
                            rogister
                        </a>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 pb-20">
        @if(session('success'))
            <div class="max-w-2xl mx-auto bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-xl shadow-sm mb-10 flex items-center gap-3 animate-[pulse_2s_infinite]">
                <span class="text-xl">✅</span>
                <p class="text-sm font-bold italic tracking-tight">{{ session('success') }}</p>
            </div>
        @endif

        @yield('content')
    </main>


</body>
</html>
