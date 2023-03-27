<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class Panier extends Controller
{
    // RETOURNE LA VUE PANIER
    public function showPanier(){

        $content = Cart::getContent();

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 7.7%',
            'type' => 'tax',
            'target' => 'subtotal',
            'value' => '7.7%'
        ));
        // APPLIQUER LA CONDITION
        Cart::condition($condition);

        // TOTAL TTC
        $total_ttc_panier = Cart::getTotal();

        // TOTAL TVA
        $tva = $total_ttc_panier / (1 + 0.077) * 0.077;

        // TOTAL HT
        $total_ht_panier = $total_ttc_panier - $tva;

        return view('panier.panier', compact('content', 'total_ttc_panier', 'total_ht_panier', 'tva'));
    }

    // AJOUTER UN PRODUIT AU PANIER
    public function add(Request $request, $id) {
        // récupérer le produit
        $produit = Product::where('id_product', $id)->first();

        // Calculer le prix TTC
        $prix_ttc = $produit->prixTTC() * $request->quantity;

        Cart::add(array(
            'id' => $produit->id_product,
            'name' => $produit->name_product,
            'price' => $produit->price_ht,
            'quantity' => $request->quantity,
            'attributes' => array('image'=>$produit->image_product, 'prix_ttc'=>$prix_ttc)
        ));

        return redirect(route('panier_show'));
    }

    // SUPPRIMER UN PRODUIT DU PANIER
    public function suppProduit($id){
        Cart::remove($id);
        return back();
    }
}
