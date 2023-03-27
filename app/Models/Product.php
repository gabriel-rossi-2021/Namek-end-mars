<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // TAUX TVA
    private static $facteur_tva = 1.077;

    // PERMET DE FAIRE UNE RELATION ENTRE Product & Category et de pouvoir utiliser ensuite les champs de la DB dans le fichier produit.blade.php
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id_category');
    }

    protected $primaryKey = 'id_product'; // Set the primary key to 'id_product'

    // Reommander des produits
    public function recommandation()
    {
        return $this->belongsToMany('App\Models\Product', 'produit_recommande', 'produit_id', 'produit_recommande_id');
    }

    public function prixTTC(){
        /*
        define('TAUX_TVA', 0.077);
        $prix_ht = $this->price_ht * TAUX_TVA; // CALCULE LE 7.7 % DU PRIX HT
        $prix_ttc = $prix_ht + $this->price_ht; // AJOUTER LE 7.7 % AU PRIX HT
        */
        $prix_ttc = $this->price_ht * self::$facteur_tva;
        return number_format($prix_ttc, 2);
    }

    use HasFactory;
}
