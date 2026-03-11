<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Livraison Maroc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">


    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-orange-500">Livraison Maroc</div>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:text-orange-500">Home</a>
                <a href="/register" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</a>
            </div>
        </div>
    </nav>


    <section class="py-20">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
            <h2 class="text-2xl font-bold mb-6 text-center">Se connecter</h2>

            <form method="POST" action="/login">
                @csrf


                <div class="mb-4">
                    <label class="block mb-1 font-semibold" for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                           required autofocus>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-4">
                    <label class="block mb-1 font-semibold" for="password">Mot de passe</label>
                    <input type="password" name="password" id="password"
                           class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                           required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

               
                <div class="mb-6 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">Se souvenir de moi</label>
                </div>

                <button type="submit"
                        class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600 font-semibold">
                    Se connecter
                </button>
            </form>

            <p class="mt-4 text-center text-gray-600">
                Pas de compte ? <a href="/register" class="text-blue-500 hover:underline">S'inscrire</a>
            </p>
        </div>
    </section>

</body>
</html>
