<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitRecommande extends Model
{
    protected $table = 'produit_recommande';
    public $timestamps = false ;

    use HasFactory;
}
