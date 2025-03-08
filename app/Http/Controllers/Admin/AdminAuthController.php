<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // Affichage du formulaire d'authentification
    public function showAuthForm()
    {
        return view('admin.auth');
    }

    // Authentification par email et mot de passe
    public function login(Request $request)
    {
        // Valider les entrées
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        // Tentative d'authentification avec le guard 'admin'
        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            return response()->json([
                'success'  => true,
                'redirect' => route('admin.dashboard')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Identifiants incorrects'
        ], 401);
    }

    // Déconnexion de l'administrateur
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth');
    }
}
