{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livrson Maroc - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <nav class="bg-white py-4 shadow-sm">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="text-2xl font-black text-blue-900 uppercase italic">Livrson<span class="text-orange-500">Maroc</span></div>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-gray-600 font-bold hover:text-blue-900">Connexion</a>
                <a href="{{ route('register') }}" class="bg-blue-900 text-white px-6 py-2 rounded-full font-bold">Inscription</a>
            </div>
        </div>
    </nav>




    <header class="relative h-[600px] flex items-center justify-center text-white overflow-hidden">
        <img src="https://img.freepik.com/free-photo/truck-driving-highway-sunset_23-2148897587.jpg" class="absolute inset-0 w-full h-full object-cover brightness-50">

        <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight uppercase">
                Envoyez vos marchandises <br> avec facilité
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-gray-200">
                Trouvez un livreur sûr pour transporter vos biens <br> partout au Maroc.
            </p>
            <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-5 px-12 rounded-full text-lg shadow-2xl transition-all hover:scale-105">
                Commencer Maintenant
            </a>
        </div>
    </header>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-black text-center text-gray-800 mb-16 italic">Comment ça marche?</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center group">
                    <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center text-4xl mb-6 mx-auto group-hover:bg-orange-500 group-hover:text-white transition-all">
                        📦
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">1. Publiez votre demande</h3>
                    <p class="text-gray-500">Décrivez votre colis et choisissez la destination.</p>
                </div>

                <div class="text-center group">
                    <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center text-4xl mb-6 mx-auto group-hover:bg-orange-500 group-hover:text-white transition-all text-orange-500">
                        🔍
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">2. Trouvez un livreur</h3>
                    <p class="text-gray-500">Consultez les offres des transporteurs vérifiés.</p>
                </div>

                <div class="text-center group">
                    <div class="w-24 h-24 bg-orange-100 rounded-full flex items-center justify-center text-4xl mb-6 mx-auto group-hover:bg-orange-500 group-hover:text-white transition-all">
                        🚀
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">3. Expédiez votre colis</h3>
                    <p class="text-gray-500">Contactez le livreur et envoyez vos marchandises.</p>
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
</html> --}}
{{--

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livraison Maroc - Expert Déménagement</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
    .hero-gradient { background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1519003722824-192d9923315b?auto=format&fit=crop&q=80&w=2000'); background-size: cover; background-position: center; }
  </style>
</head>
<body class="bg-white text-gray-900">

  <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-sm shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="text-2xl font-black text-blue-900 tracking-tighter italic">LIVRAISON<span class="text-orange-500">MAROC</span></div>
      <div class="hidden md:flex gap-8 font-bold text-xs uppercase tracking-widest text-gray-600">
        <a href="#accueil" class="hover:text-orange-500 transition">Accueil</a>
        <a href="#avis" class="hover:text-orange-500 transition">Avis</a>
        <a href="#pourquoi" class="hover:text-orange-500 transition">Pourquoi nous</a>
        <a href="#comment" class="hover:text-orange-500 transition">Comment ça marche</a>
        <a href="#contact" class="hover:text-orange-500 transition">Contact</a>
      </div>
     <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-gray-600 font-bold hover:text-blue-900">Connexion</a>
                <a href="{{ route('register') }}" class="bg-blue-900 text-white px-6 py-2 rounded-full font-bold">Inscription</a>
            </div>
    </div>
  </nav>

  <header id="accueil" class="h-screen hero-gradient flex items-center justify-center text-center text-white px-6">
    <img src="https://th.bing.com/th/id/R.3124468295258daf3efe543c52937ab8?rik=VjBPPfJ8NufccQ&pid=ImgRaw&r=0" class="absolute inset-0 w-full h-full object-cover brightness-50">
    {{-- <div class="max-w-4xl">
      <h1 class="text-5xl md:text-8xl font-black mb-6 leading-tight">
        Un savoir-faire <br> <span class="text-orange-500 italic underline decoration-white decoration-4 underline-offset-8">qui déménage.</span>
      </h1>
      <p class="text-xl md:text-2xl mb-10 text-gray-200 font-light">Des clients ravis, des meubles en sécurité, partout au Maroc.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#contact" class="bg-orange-500 hover:bg-orange-600 px-10 py-5 rounded-2xl font-black text-xl transition transform hover:scale-105 shadow-2xl">Calculer mon devis</a>
      </div>
    </div> --}}

     {{-- <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight uppercase">
                Envoyez vos marchandises <br> avec facilité
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-gray-200">
                Trouvez un livreur sûr pour transporter vos biens <br> partout au Maroc.
            </p>
            <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-5 px-12 rounded-full text-lg shadow-2xl transition-all hover:scale-105">
                Commencer Maintenant
            </a>
        </div>

  </header>

  <section class="py-12 bg-gray-50 border-b">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center">
      <div class="flex gap-1 mb-2">
        <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white font-bold rounded-sm">★</div>
        <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white font-bold rounded-sm">★</div>
        <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white font-bold rounded-sm">★</div>
        <div class="w-10 h-10 bg-green-500 flex items-center justify-center text-white font-bold rounded-sm">★</div>
        <div class="w-10 h-10 bg-gray-300 flex items-center justify-center text-white font-bold rounded-sm">★</div>
      </div>
      <h2 class="text-3xl font-black text-blue-950 italic uppercase tracking-tighter">Excellent</h2>
      <p class="text-gray-500 mt-2 italic font-medium">Noté 4,2 sur 5 basé sur 486 avis sur <span class="text-green-600 font-black">Trustpilot</span></p>
    </div>
  </section>

  <section id="avis" class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
      <h3 class="text-4xl font-black text-center mb-16 text-blue-950 uppercase">Nos Clients Témoignent</h3>
      <div class="flex gap-6 overflow-x-auto pb-10">
        <div class="min-w-[300px] bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition">
          <div class="text-yellow-400 mb-3 text-xl">★★★★★</div>
          <p class="text-gray-600 mb-6 italic leading-relaxed">"Incroyable ! De Casa à Agadir sans aucun problème."</p>
          <div class="flex items-center gap-3">
             <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center font-bold text-blue-900">A</div>
             <p class="font-bold text-blue-950">Ahmed K.</p>
          </div>
        </div>
        <div class="min-w-[300px] bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition">
          <div class="text-yellow-400 mb-3 text-xl">★★★★★</div>
          <p class="text-gray-600 mb-6 italic leading-relaxed">"Le moins cher sur le marché et très poli."</p>
          <div class="flex items-center gap-3">
             <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center font-bold text-orange-600">S</div>
             <p class="font-bold text-blue-950">Sara L.</p>
          </div>
        </div>
        <div class="min-w-[300px] bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition">
          <div class="text-yellow-400 mb-3 text-xl">★★★★★</div>
          <p class="text-gray-600 mb-6 italic leading-relaxed">"Ponctuel et rapide. Je recommande LIVRAISONMAROC style."</p>
          <div class="flex items-center gap-3">
             <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center font-bold text-green-600">Y</div>
             <p class="font-bold text-blue-950">Youssef M.</p>
          </div>
        </div>
        <div class="min-w-[300px] bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition">
          <div class="text-yellow-400 mb-3 text-xl">★★★★★</div>
          <p class="text-gray-600 mb-6 italic leading-relaxed">"Déménageurs très costauds et soigneux."</p>
          <div class="flex items-center gap-3">
             <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center font-bold text-red-600">F</div>
             <p class="font-bold text-blue-950">Fatima Z.</p>
          </div>
        </div>
        <div class="min-w-[300px] bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition">
          <div class="text-yellow-400 mb-3 text-xl">★★★★★</div>
          <p class="text-gray-600 mb-6 italic leading-relaxed">"Application géniale pour trouver un camion."</p>
          <div class="flex items-center gap-3">
             <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center font-bold text-purple-600">K</div>
             <p class="font-bold text-blue-950">Karim B.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="pourquoi" class="py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
      <div class="relative">
        <img src="https://fastexpress.ma/wp-content/uploads/2023/06/7.png" class="rounded-[4rem] shadow-2xl relative z-10">
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-orange-500 rounded-full opacity-20 animate-pulse"></div>
      </div>
      <div>
        <h2 class="text-5xl font-black text-blue-950 mb-12 leading-tight uppercase">Pourquoi choisir LIVRAISONMAROC ?</h2>
        <div class="grid gap-10">
           <div class="flex gap-6 items-start">
              <span class="text-4xl">💰</span>
              <div>
                <h4 class="text-2xl font-bold">Économisez du temps</h4>
                <p class="text-gray-500 leading-relaxed">Comparez instantanément les meilleurs livreurs de votre région.</p>
              </div>
           </div>
           <div class="flex gap-6 items-start">
              <span class="text-4xl">🚛</span>
              <div>
                <h4 class="text-2xl font-bold">Logistique Premium</h4>
                <p class="text-gray-500 leading-relaxed">Des camions équipés pour tout type de déménagement.</p>
              </div>
           </div>
        </div>
      </div>
    </div>
  </section>

  <section id="comment" class="py-24 bg-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-5xl font-black text-center mb-20 uppercase italic underline decoration-orange-500">Comment ça marche ?</h2>
      <div class="grid md:grid-cols-3 gap-12">
        <div class="text-center">
          <div class="h-64 rounded-3xl overflow-hidden mb-8 border-4 border-white/10 shadow-2xl">
            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?auto=format&fit=crop&q=80&w=500" class="w-full h-full object-cover">
          </div>
          <h3 class="text-2xl font-black text-orange-500 mb-4 italic">1. Postez l'annonce</h3>
          <p class="text-blue-100">Dites-nous ce que vous déplacez et vers où.</p>
        </div>
        <div class="text-center">
          <div class="h-64 rounded-3xl overflow-hidden mb-8 border-4 border-white/10 shadow-2xl">
            <img src="https://theliot.fr/wp-content/uploads/2019/03/repas-entreprise.jpg" class="w-full h-full object-cover">
          </div>
          <h3 class="text-2xl font-black text-orange-500 mb-4 italic">2. Choisissez l'offre</h3>
          <p class="text-blue-100">Sélectionnez le livreur selon les avis et le prix.</p>
        </div>
        <div class="text-center">
          <div class="h-64 rounded-3xl overflow-hidden mb-8 border-4 border-white/10 shadow-2xl">
            <img src="https://normanferns.co.uk/wp-content/uploads/2023/04/SafeBelongings.jpg" class="w-full h-full object-cover">
          </div>
          <h3 class="text-2xl font-black text-orange-500 mb-4 italic">3. Déménagez Zen</h3>
          <p class="text-blue-100">Votre marchandise arrive à destination en toute sécurité.</p>
        </div>
      </div>
    </div>
  </section>

 <section id="contact" class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 text-center mb-12">
        <h2 class="text-5xl font-black text-blue-900 uppercase italic">Contactez-<span class="text-orange-500">Nous</span></h2>
    </div>

    <div class="max-w-7xl mx-auto px-6">
      <div class="bg-blue-950 rounded-[4rem] overflow-hidden shadow-2xl border border-blue-900 flex flex-col lg:flex-row">

        <div class="lg:w-1/2 p-12 text-white border-b lg:border-b-0 lg:border-r border-white/10">
          <h3 class="text-2xl font-black mb-8 text-orange-500 uppercase tracking-widest italic">Nos Coordonnées</h3>

          <div class="space-y-10">
            <div class="flex items-center gap-6 group">
              <span class="text-3xl bg-white/5 w-14 h-14 flex items-center justify-center rounded-2xl group-hover:bg-orange-500 transition">📞</span>
              <div><p class="text-xs text-blue-300 font-bold uppercase tracking-tighter">Téléphone</p><p class="text-xl font-bold">+212 522 00 00 00</p></div>
            </div>

            <div class="flex items-center gap-6 group">
              <span class="text-3xl bg-white/5 w-14 h-14 flex items-center justify-center rounded-2xl group-hover:bg-orange-500 transition">✉️</span>
              <div><p class="text-xs text-blue-300 font-bold uppercase tracking-tighter">Email</p><p class="text-xl font-bold">contact@livraisonmaroc.ma</p></div>
            </div>

            <div class="flex items-center gap-6 group">
              <span class="text-3xl bg-white/5 w-14 h-14 flex items-center justify-center rounded-2xl group-hover:bg-blue-600 transition">🔗</span>
              <div><p class="text-xs text-blue-300 font-bold uppercase tracking-tighter">LinkedIn</p><p class="text-xl font-bold">linkedin.com/company/livraisonmaroc</p></div>
            </div>

            <div class="flex items-center gap-6 group">
              <span class="text-3xl bg-white/5 w-14 h-14 flex items-center justify-center rounded-2xl group-hover:bg-green-500 transition">📱</span>
              <div><p class="text-xs text-blue-300 font-bold uppercase tracking-tighter">Notre Application</p><p class="text-xl font-bold underline cursor-pointer">Télécharger sur App Store / Play Store</p></div>
            </div>
          </div>
        </div>

        <div class="lg:w-1/2 p-12 bg-white flex flex-col justify-center">
          <div class="bg-gray-50 p-10 rounded-[3rem] border border-gray-100 shadow-inner">
             <h3 class="text-2xl font-black text-blue-900 mb-6 uppercase italic">Disponibilité & Engagement</h3>

             <div class="space-y-6 text-gray-700">
                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                    <span class="font-bold text-lg italic">Horaires d'ouverture :</span>
                    <span class="bg-blue-900 text-white px-4 py-1 rounded-full font-bold">07:00 – 19:00</span>
                </div>

                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                    <span class="font-bold text-lg italic">Jours de service :</span>
                    <span class="text-orange-600 font-black tracking-widest">7j/7 (Toute la semaine)</span>
                </div>

                <div class="mt-8">
                    <div class="flex gap-4 mb-4">
                        <span class="text-3xl">🛡️</span>
                        <h4 class="text-xl font-black text-blue-950 uppercase italic">Garantie de Sécurité</h4>
                    </div>
                    <p class="text-gray-500 leading-relaxed italic">
                        "Nous nous engageons à prendre soin de vos biens de la prise en charge jusqu'à l'arrivée finale. Votre marchandise est livrée en toute sécurité et en toute sérénité, <strong>en amman</strong>, tout au long de la semaine."
                    </p>
                </div>
             </div>

             <div class="mt-10 flex items-center gap-3">
                <div class="w-3 h-3 bg-green-500 rounded-full animate-ping"></div>
                <p class="text-sm font-bold text-gray-400 uppercase tracking-widest italic">Actuellement en service</p>
             </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="bg-blue-950 text-white py-12 text-center border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6">
       <div class="text-2xl font-black mb-4 tracking-tighter">LIVRAISON<span class="text-orange-500">MAROC</span></div>
       <p class="opacity-30 text-xs tracking-widest uppercase">© 2026 Livraison Maroc - Plateforme Logistique N°1</p>
    </div>
  </footer>

</body>
</html> --}}





{{-- <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-black mb-6 leading-tight uppercase">
                Envoyez vos marchandises <br> avec facilité
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-gray-200">
                Trouvez un livreur sûr pour transporter vos biens <br> partout au Maroc.
            </p>
            <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-5 px-12 rounded-full text-lg shadow-2xl transition-all hover:scale-105">
                Commencer Maintenant
            </a>
        </div> --}}
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
    }
  </style>
</head>

<body class="bg-white text-gray-900">

<!-- NAVBAR -->
<nav class="fixed w-full bg-white shadow z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-black text-blue-900">LIVR<span class="text-orange-500">SON</span></h1>

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
      Envoyez vos colis <br> facilement 🚚
    </h1>

    <p class="text-xl mb-10 text-gray-200">
      Trouvez un transporteur ou gagnez de l'argent avec vos trajets.
    </p>

    <div class="flex flex-wrap justify-center gap-4">
      <a href="/offers/create" class="bg-orange-500 px-8 py-4 rounded-full font-bold text-lg">
        Publier une offre
      </a>

      <a href="/offers" class="bg-white text-blue-900 px-8 py-4 rounded-full font-bold text-lg">
        Voir les offres
      </a>
    </div>
  </div>
</header>

<!-- TRUST -->
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

<!-- TEMOIGNAGES -->
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

<!-- POURQUOI -->
{{-- <section id="pourquoi" class="py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-4xl font-black text-blue-900 mb-12">
      Pourquoi choisir LIVRSON ?
    </h2>

    <div class="grid md:grid-cols-2 gap-10">
      <div>✔️ Publier une offre facilement</div>
      <div>✔️ Recevoir plusieurs propositions</div>
      <div>✔️ Choisir le meilleur prix</div>
      <div>✔️ Livraison sécurisée</div>
    </div>
  </div>
</section> --}}

<section id="pourquoi" class="py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">

    <!-- Image on the left -->
    <div class="md:w-1/2">
      <img src="https://images.unsplash.com/photo-1602524201526-6f3c96187f25?auto=format&fit=crop&w=800&q=80" class="rounded-3xl shadow-2xl w-full">
    </div>

    <!-- Text content on the right -->
    <div class="md:w-1/2 space-y-6">
      <h2 class="text-4xl font-black text-blue-900 mb-6">Pourquoi choisir LIVRSON ?</h2>

      <p class="text-lg font-medium text-gray-700">✔️ Publier une offre facilement</p>
      <p class="text-lg font-medium text-gray-700">✔️ Recevoir plusieurs propositions</p>
      <p class="text-lg font-medium text-gray-700">✔️ Choisir le meilleur prix</p>
      <p class="text-lg font-medium text-gray-700">✔️ Livraison sécurisée</p>
    </div>

  </div>
</section>

<!-- COMMENT -->
{{-- <section id="comment" class="py-20 bg-blue-900 text-white text-center">
  <h2 class="text-4xl font-black mb-12">Comment ça marche ?</h2>

  <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-6">
    <div>1. Publiez une offre</div>
    <div>2. Recevez des propositions</div>
    <div>3. Choisissez le transporteur</div>
  </div>
</section> --}}
<section id="comment" class="py-20 bg-blue-900 text-white text-center">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-4xl font-black mb-12">Comment ça marche ?</h2>

    <div class="grid md:grid-cols-3 gap-6">

      <!-- Step 1 -->
      <div class="flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1581091215363-1c9f9b6f1b10?auto=format&fit=crop&w=500&q=80" class="w-32 h-32 rounded-full mb-4 shadow-lg">
        <div class="font-bold text-lg">1. Publiez une offre</div>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=500&q=80" class="w-32 h-32 rounded-full mb-4 shadow-lg">
        <div class="font-bold text-lg">2. Recevez des propositions</div>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1581092163114-df20b4f8b810?auto=format&fit=crop&w=500&q=80" class="w-32 h-32 rounded-full mb-4 shadow-lg">
        <div class="font-bold text-lg">3. Choisissez le transporteur</div>
      </div>

    </div>
  </div>
</section>
<!-- CTA -->
<section class="py-20 bg-orange-500 text-white text-center">
  <h2 class="text-4xl font-black mb-6">Commencez maintenant</h2>
  <a href="/register" class="bg-white text-orange-500 px-8 py-4 rounded-full font-bold">
    Créer un compte
  </a>
</section>

<!-- CONTACT -->
<section id="contact" class="py-20 bg-white text-center">
  <h2 class="text-4xl font-black text-blue-900 mb-6">Contactez-Nous</h2>
  <p>Email: contact@livrson.ma</p>
  <p>Téléphone: +212 600 00 00 00</p>
</section>

<!-- FOOTER -->
<footer class="bg-blue-950 text-white text-center py-6">
  <p>© 2026 Livrson - Plateforme de livraison</p>
</footer>

</body>
</html>
