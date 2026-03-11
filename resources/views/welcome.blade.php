<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraison Maroc - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-orange-500">Livraison Maroc</div>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:text-orange-500">Home</a>
                <a href="{{ url('/offres') }}" class="hover:text-orange-500">Offres</a>
                @guest
                    <a href="/login" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Login</a>
                    <a href="/register" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</a>
                @else
                    <span class="text-gray-700 mr-4">Bonjour, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/login" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    {{-- <section class="bg-orange-50 py-20">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Envoyez vos marchandises facilement au Maroc</h1>
            <p class="text-gray-600 mb-8">Connectez-vous avec des livreurs fiables et optimisez vos livraisons.</p>
            <a href="{{ url('/offres') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-orange-600">Voir les offres</a>
        </div>
    </section> --}}



    <section class="relative">

    <!-- Background Image -->
    <img src="/images/truck.jpg"
         class="w-full h-[500px] object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-900/50"></div>

    <!-- Content -->
    <div class="absolute inset-0 flex items-center">
        <div class="max-w-6xl mx-auto px-6 text-white">

            <h1 class="text-5xl font-bold mb-4">
                Envoyez vos marchandises<br>
                avec facilité
            </h1>

            <p class="text-lg mb-6">
                Trouvez un livreur pour transporter vos colis
                entre villes au Maroc.
            </p>

            <a href="/offres"
               class="bg-orange-500 hover:bg-orange-600
                      px-6 py-3 rounded-lg font-semibold">
                Voir les offres
            </a>

        </div>
    </div>

</section>

    <!-- Comment ça marche -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12">Comment ça marche</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="text-6xl mb-4">📦</div>
                    <h3 class="text-xl font-semibold mb-2">1. Envoyez votre demande</h3>
                    <p>Remplissez les détails de votre marchandise et la ville de départ et d’arrivée.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="text-6xl mb-4">🚚</div>
                    <h3 class="text-xl font-semibold mb-2">2. Le livreur accepte</h3>
                    <p>Les livreurs disponibles consultent votre demande et acceptent si le trajet correspond.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="text-6xl mb-4">✅</div>
                    <h3 class="text-xl font-semibold mb-2">3. Livraison sécurisée</h3>
                    <p>Suivez votre livraison et recevez vos marchandises en toute sécurité.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto text-center">
            <p>© 2026 Livraison Maroc. Tous droits réservés.</p>
            <p class="mt-2 text-gray-400">Contact: info@livraisonmaroc.ma | Tel: +212 600 000 000</p>
        </div>
    </footer>

</body>
</html>
