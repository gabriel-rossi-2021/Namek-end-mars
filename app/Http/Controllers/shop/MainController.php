<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Login;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isEmpty;

class MainController extends Controller
{
    // RETOURNE LA VUE INDEX.BLADE.PHP
    public function index(){
        // RENVOIE LES CATEGORIES
        $categories = Category::all();
        return view('shop.indexCategory', compact('categories'));
    }

    public function showFunction(){
        $function = User::where('function_id == 1')->get();

        return view('include.header', compact('function'));
    }


    public function productAll(Request $request){

        // Récupère la valeur du paramètre de requête "tri"
        $tri = $request->input('tri');

        // Tri les produits en fonction de la valeur de "tri"
        if ($tri == 'prix-croissant') {
            $produits = Product::orderBy('price_ht', 'asc')->get();
        }
        else if ($tri == 'prix-decroissant') {
            $produits = Product::orderBy('price_ht', 'desc')->get();
        }
        else {
            $produits = Product::all();
        }

        return view('shop.produit', compact('produits'));
    }

    public function product(Request $request){
        // Récupère la valeur du paramètre de requête "tri"
        $tri = $request->input('tri');

        // Récupère la valeur du paramètre de requête "category_id"
        $category_id = $request->id;

        // Initialise la requête de sélection de produits
        $query = Product::query();

        // Ajoute la condition de filtrage par category_id
        $query->where('category_id', $category_id);

        // Tri les produits en fonction de la valeur de "tri"
        if ($tri == 'prix-croissant') {
            $query->orderBy('price_ht', 'asc');
        }
        else if ($tri == 'prix-decroissant') {
            $query->orderBy('price_ht', 'desc');
        }

        // Récupère les produits triés
        $produits = $query->get();

        // RENVOIE LA CATEGORY ASSOCIER AUX PRODUITS
        $category = Category::findOrFail($category_id);

        return view('shop.produit', compact('produits', 'category'));
    }

    // DETAILS PRODUIT
    public function detailsProduit(Request $request, $id){
        $produit = Product::findOrFail($id);
        // SELECT * FROM product WHERE id_product = ?
        $details = Product::where('id_product', $id)->first();

        return view('shop.details', compact('details', 'produit'));
    }

    // AFFICHE LA PAGE DE CONNEXION
    public function showLoginForm()
    {
        return view('login');
    }

    // SALT FIXE
    protected $salt = 'i;151-120#';

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password') . $this->salt,
        ];

        // Récupérer l'utilisateur correspondant
        // $user = User::where('email', $credentials['email'])->first();

        // Vérification du mot de passe en ajoutant le salt
        if (Auth::attempt($credentials)) {
            // Si les informations d'identification sont valides, l'utilisateur est connecté
            return redirect()->intended('/');
        }
        else {
            // Si les informations d'identification ne sont pas valides, l'utilisateur est redirigé vers la page de connexion avec un message d'erreur
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => "L'email et/ou le mot de passe ne sont pas valides."
            ]);
        }
    }

    // DECONNECTER LA SESSION DE L'UTILISATEUR
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // RENVOIE SUR LA PAGE HOME
    }

    // INSCRIPTION AFFICHE
    public function inscription(){
        return view('signup');
    }

    // CREATION UTILISATEUR
    public function register(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|max:50',
            'phone' => 'required',
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'psw' => 'required',
            'birth' => 'required|date|before_or_equal:'.now()->subYears(18)->format('Y-m-d'),
        ]);

        $password = $validatedData['psw'];

        // Créer un nouvel utilisateur
        $user = new User();
        $user->title = $validatedData['titre'];
        $user->phone_number = $validatedData['phone'];
        $user->first_name = $validatedData['name'];
        $user->last_name = $validatedData['last_name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($password . $this->salt);
        $user->birth_date = $validatedData['birth'];
        $user->function_id = 3;
        $user->save();

        // Connecter l'utilisateur
        auth()->login($user);

        // Rediriger vers la page d'accueil
        return redirect('/');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('name_product', 'like', '%'.$query.'%')->get();

        return view('Include.search', ['products' => $products], compact('query'));
    }




}
