<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Models\Role;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Le-mail est nécessaire pour entrer ',
            'password.required' =>  'Le mot de passe est nécessaire'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/offres');
        }

        return back()->withErrors([
            'email' => 'Les informations que vous avez saisies sont incorrectes, veuillez vérifier l email et le mot de passe.'
        ]);
    }



    public function showRegister() {
    // $villes = Ville::all();
     $roles = Role::where('name', '!=', 'admin')->get();

    return view('register', compact('roles'));
}

    public function register(Request $request) {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'phone'    => 'nullable|string',
            // 'ville_id' => 'required|exists:villes,id',
            'role_id'  => 'required|exists:roles,id',
        ]);


        $data['password'] = Hash::make($data['password']);


        $user = User::create($data);


        Auth::login($user);

        return redirect('/offres')->with('success', 'مرحبا بك! الحساب ديالك تكريه بنجاح.');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/offres');
    }
}
