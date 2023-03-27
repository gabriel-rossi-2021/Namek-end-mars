<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposers;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // LORS DU LANCEMENT DU SITE
        View()->composer(['home', 'contact', 'login', 'signup', 'shop.details', 'products', 'shop.produit', 'shop.indexCategory', 'Include.header', 'panier.panier', 'checkout.checkout', 'include.search'], HeaderComposers::class);
    }
}
