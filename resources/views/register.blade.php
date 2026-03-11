<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Livraison Maroc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">


    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-orange-500">Livraison Maroc</div>
            <div class="space-x-4">
                <a href="{{ url('/') }}" class="hover:text-orange-500">Home</a>
                <a href="/login" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Login</a>
            </div>
        </div>
    </nav>


    <section class="py-20">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
            <h2 class="text-2xl font-bold mb-6 text-center">Créer un compte</h2>

            <form method="POST" action="/register">
                @csrf


                <div class="mb-4">
                    <label class="block mb-1 font-semibold" for="name">Nom complet</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                           required autofocus>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-4">
                    <label class="block mb-1 font-semibold" for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                           required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block mb-1 font-semibold" for="password">Mot de passe</label>
                    <input type="password" name="password" id="password"
                           class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                           required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="mb-4">
                    <label class="block mb-1 font-semibold" for="password_confirmation">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                           required>
                </div>

                <!-- Role -->
                <div class="mb-6">
                    <label class="block mb-1 font-semibold" for="role">Je suis :</label>
                    <select name="role" id="role"
                            class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
                        <option value="">Sélectionnez votre rôle</option>
                        <option value="client" {{ old('role')=='client' ? 'selected' : '' }}>Client</option>
                        <option value="livreur" {{ old('role')=='livreur' ? 'selected' : '' }}>Livreur</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 font-semibold">
                    S'inscrire
                </button>
            </form>

            <p class="mt-4 text-center text-gray-600">
                Déjà un compte ? <a href="/login" class="text-orange-500 hover:underline">Login</a>
            </p>
        </div>
    </section>

</body>
</html>
