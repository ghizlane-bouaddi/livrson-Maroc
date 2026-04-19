<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Livrson - Livraison Maroc</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body { font-family: 'Poppins', sans-serif; }
    .hero {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
      url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d');
      background-size: cover;
      background-position: center;
      width: 100%
    }
  </style>
</head>

<body class="bg-white text-gray-900">

<!-- NAVBAR -->
<nav class="fixed w-full bg-white shadow z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
 <a href="{{ route('welcome') }}" class="logo-font text-2xl font-black text-blue-950 uppercase italic tracking-tighter">
                Livrson<span class="text-orange-500">Maroc</span>
            </a>
    <div class="hidden md:flex gap-6 font-bold text-gray-600">
      <a href="#avis">Avis</a>
      <a href="#pourquoi">Pourquoi</a>
      <a href="#comment">Comment</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="space-x-4">
      <a href="/login" class="text-gray-600 font-bold">Connexion</a>
      <a href="/register" class="bg-blue-900 text-white px-5 py-2 rounded-full font-bold">Inscription</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<header class="hero h-screen flex items-center justify-center text-center text-white px-6">
  <div>
    <h1 class="text-5xl md:text-7xl font-black mb-6">
      Envoyez vos colis <br> facilement
    </h1>

    <p class="text-xl mb-10 text-gray-200">
      Trouvez un transporteur ou gagnez de l'argent avec vos trajets.
    </p>


  </div>
</header>


<section class="py-12 bg-gray-50 border-b text-center">
  <div class="flex justify-center gap-1 mb-2">
    <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white">★</div>
    <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white">★</div>
    <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white">★</div>
    <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white">★</div>
    <div class="w-10 h-10 bg-gray-300 flex items-center justify-center text-white">★</div>
  </div>

  <h2 class="text-3xl font-black text-blue-950 italic uppercase">Excellent</h2>
  <p class="text-gray-500 mt-2 italic">
    Noté 4,2 sur 5 basé sur 486 avis sur <span class="text-green-600 font-bold">Trustpilot</span>
  </p>
</section>


<section id="avis" class="py-20">
  <h3 class="text-4xl font-black text-center mb-16 text-blue-950 uppercase">
    Nos Clients Témoignent
  </h3>

  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6">
    <div class="p-6 border rounded-2xl shadow">
      <p>"J’ai trouvé un transporteur en 10 minutes !"</p>
      <h4 class="font-bold mt-4">Ahmed</h4>
    </div>

    <div class="p-6 border rounded-2xl shadow">
      <p>"Je gagne de l'argent avec mes trajets."</p>
      <h4 class="font-bold mt-4">Youssef</h4>
    </div>

    <div class="p-6 border rounded-2xl shadow">
      <p>"Service rapide et fiable."</p>
      <h4 class="font-bold mt-4">Sara</h4>
    </div>
  </div>
</section>


<section id="pourquoi" class="py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">


    <div class="md:w-1/2">
      <img src="https://rennesbusinessmag.fr/wp-content/uploads/2020/12/20190201-Livraison-retro-2018-1200x800-1.jpg" class="rounded-3xl shadow-2xl w-full">
    </div>


    <div class="md:w-1/2 space-y-6">
      <h2 class="text-4xl font-black text-blue-900 mb-6">Pourquoi choisir LIVRSON ?</h2>

      <p class="text-lg font-medium text-gray-700">✔️ Publier une offre facilement</p>
      <p class="text-lg font-medium text-gray-700">✔️ Recevoir plusieurs propositions</p>
      <p class="text-lg font-medium text-gray-700">✔️ Choisir le meilleur prix</p>
      <p class="text-lg font-medium text-gray-700">✔️ Livraison sécurisée</p>
    </div>

  </div>
</section>


<section id="comment" class="py-20 bg-blue-900 text-white text-center">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-4xl font-black mb-12">Comment ça marche ?</h2>

    <div class="grid md:grid-cols-3 gap-6">


      <div class="flex flex-col items-center">
        <img src="https://th.bing.com/th/id/OIP.8iL4TCbP5iZZFg8kWeWjowHaE8?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" class="w-32 h-32 rounded-full mb-4 shadow-lg">
        <div class="font-bold text-lg">1. Publiez une offre</div>
      </div>


      <div class="flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=500&q=80" class="w-32 h-32 rounded-full mb-4 shadow-lg">
        <div class="font-bold text-lg">2. Recevez des propositions</div>
      </div>


      <div class="flex flex-col items-center">
        <img src="https://tse2.mm.bing.net/th/id/OIP.c33TWByG-7t0a_ZLLuQ7AAAAAA?w=340&h=203&rs=1&pid=ImgDetMain&o=7&rm=3" class="w-32 h-32 rounded-full mb-4 shadow-lg">
        <div class="font-bold text-lg">3. Choisissez le transporteur</div>
      </div>

    </div>
  </div>
</section>

<section class="py-20 bg-orange-500 text-white text-center">
  <h2 class="text-4xl font-black mb-6">Commencez maintenant</h2>
  <a href="/register" class="bg-white text-orange-500 px-8 py-4 rounded-full font-bold">
    Créer un compte
  </a>
</section>


<section id="contact" class="py-20 bg-white text-center">
  <h2 class="text-4xl font-black text-blue-900 mb-6">Contactez-Nous</h2>
  <p>Email: ghizlane@gmail.com</p>
  <p>Téléphone: +212703788414</p>
</section>


<footer class="bg-blue-950 text-white text-center py-6">
  <p>© 2026 Livrson - Plateforme de livraison</p>
</footer>

</body>
</html>
