<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    // Afficher la view dashboard
    public function AfficheDashboard(Request $request){
        // Si l'utilisateur est co
        $user = $request->user();

        // FORMAT AFFICHAGE N° TEL SUISSE
        $phone_number = $user->phone_number;
        $formatted_number = substr($phone_number, 0, 2) . ' ' . substr($phone_number, 2, 3) . ' ' . substr($phone_number, 5, 2) . ' ' . substr($phone_number, 7, 2);

        return view('dashboard', ['user' => $user], compact('formatted_number'));
    }

    // Update form info gen
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->username = $request->input('username');

        $user->save();

        return redirect()->route('dashboard', $id);

    }

    // Update password
    public function updatePassword(Request $request, $id)
    {
        $user = auth()->user();

        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'],
        ]);


        // Variable qui stock le SALT
        $salt = 'i;151-120#';

        if (!Hash::check($request->current_password . $salt, $user->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
        }

        $user->password = $request->input('password') . $salt;
        $user->save();

        return redirect()->route('dashboard', $id)->with('success', 'Le mot de passe a été changé avec succès.');
    }

}
