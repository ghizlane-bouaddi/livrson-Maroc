<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Client</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">


<nav class="bg-white shadow">

<div class="container mx-auto flex justify-between items-center p-4">

<h1 class="text-xl font-bold text-orange-500">
Livraison Maroc
</h1>

<div class="space-x-6">

<a href="/client/dashboard" class="text-gray-700 hover:text-orange-500">
Dashboard
</a>

<a href="#" class="text-gray-700 hover:text-orange-500">
Mes Demandes
</a>

<a href="#" class="text-gray-700 hover:text-orange-500">
Voir Offres
</a>

</div>

<div>

<a href="/logout" class="bg-orange-500 text-white px-4 py-2 rounded">
Logout
</a>

</div>

</div>

</nav>


<section class="bg-cover bg-center h-72 flex items-center justify-center text-white"
style="background-image:url('https://images.unsplash.com/photo-1503376780353-7e6692767b70')">

<div class="text-center">

<h2 class="text-4xl font-bold">
Bienvenue sur votre Dashboard
</h2>

<p class="mt-3">
Gérez vos demandes de livraison facilement
</p>

</div>

</section>


<div class="container mx-auto mt-10">



<div class="flex justify-end mb-6">

<a href="/client/demande/create"
class="bg-orange-500 text-white px-6 py-3 rounded-lg">

+ Nouvelle Demande

</a>

</div>



<div class="grid grid-cols-2 gap-6">



<div class="bg-white p-6 rounded shadow">

<h3 class="text-xl font-bold">

Casablanca → Marrakech

</h3>

<p class="mt-2 text-gray-600">

Date : 20 Avril 2026

</p>

<span class="bg-yellow-400 text-white px-3 py-1 rounded">

En attente

</span>

<div class="mt-4">

<button class="bg-blue-500 text-white px-4 py-2 rounded">

Voir détails

</button>

</div>

</div>



<div class="bg-white p-6 rounded shadow">

<h3 class="text-xl font-bold">

Rabat → Tanger

</h3>

<p class="mt-2 text-gray-600">

Date : 15 Avril 2026

</p>

<span class="bg-green-500 text-white px-3 py-1 rounded">

Acceptée

</span>

<div class="mt-4">

<button class="bg-blue-500 text-white px-4 py-2 rounded">

Voir détails

</button>

</div>

</div>

</div>



<div class="mt-10 bg-white p-8 rounded shadow text-center">

<h3 class="text-2xl font-bold">

Voir les Offres des Livreurs

</h3>

<p class="mt-2 text-gray-600">

Consultez les trajets disponibles

</p>

<a href="/offres"

class="mt-4 inline-block bg-blue-500 text-white px-6 py-3 rounded">

Voir les Offres

</a>

</div>

</div>

</body>
</html>
