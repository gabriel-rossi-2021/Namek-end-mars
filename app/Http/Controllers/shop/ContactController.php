<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Afficher le formulaire de contact
    public function AfficheContactView(){
        return view('contact');
    }

    // Traitement / Envoie du formulaire
    public function EnvoieContactForm(Request $request){

    }



}
