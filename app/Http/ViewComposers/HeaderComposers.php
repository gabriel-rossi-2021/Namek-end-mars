<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class HeaderComposers
{
    public function compose(View $view){
        // PERMET DE RECUPERER LA VARIABLE POUR TOUTES LES VUES
        $view->with('categories', Category::all());
    }
}
