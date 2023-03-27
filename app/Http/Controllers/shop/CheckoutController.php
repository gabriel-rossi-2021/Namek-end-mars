<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    // AFFICHE PAGE CHECKOUT
    public function showCheckout(Request $request){
        // Si l'utilisateur est co
        $user = $request->user();
        $content = Cart::getContent();

        if ($content->count() == 0) {
            return redirect('produit');
        }

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

        // PRIX HORS TAXE DE CHAQUE PRODUIT DANS LE PANIER
        $price_ht = array();

        foreach ($content as $item) {
            $price_ht[] = number_format($item->getPriceSum() / (1 + 0.077), 3, '.', '');
        }

        return view('checkout.checkout', ['user' => $user], compact('content', 'total_ttc_panier', 'total_ht_panier', 'tva', 'price_ht'));
    }
}
