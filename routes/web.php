<?php

use Illuminate\Support\Facades\Route;

/* REDIRECTION SUR LA VIEW HOME */
Route::get('/', "App\\Http\\Controllers\\shop\\MainController@index")->name('home');


// REDIRECTION SUR LA VIEW PRODUIT ALL
Route::get('produit', "App\\Http\\Controllers\\shop\\MainController@productAll");
// REDIRECTION SUR LA VIEW DETAILS DU PRODUIT
Route::get('details/{id}', "App\\Http\\Controllers\\shop\\MainController@detailsProduit")->name('detail_produit');
// REDIRECTION SUR LA VIEW DES PRODUITS FILTRER PAR CATEGORIES
Route::get('/category/{id}', "App\\Http\\Controllers\\shop\\MainController@product")->name('voir_products_par_cat');


// REDIRECTION SUR LA VIEW DASHBOARD (SI IL EST PAS CONNECTE -> RENVOIE DIRECTION LA VIEW LOGIN)
Route::get('dashboard', "App\\Http\\Controllers\\shop\\DashboardController@AfficheDashboard")->name('dashboard')->middleware('auth');
Route::post('/dashboard/{id}', "App\\Http\\Controllers\\shop\\DashboardController@update")->name('dashboard.update');
Route::post('/dashboard/{id}/update-password', "App\Http\Controllers\shop\DashboardController@updatePassword")->name('dashboard.update.mdp');



/* REDIRECTION SUR LA VIEW CONTACt */
Route::get('/contact', "App\\Http\\Controllers\\shop\\ContactController@AfficheContactView")->name('contact.affiche');
Route::post('/contact', "App\\Http\\Controllers\\shop\\ContactController@EnvoieContactForm")->name('contact.envoyer');


// Redirection vers la vue de connexion
Route::get('/login', 'App\Http\Controllers\Shop\MainController@showLoginForm')->name('login.form');
// Validation des données de connexion
Route::post('/login', 'App\Http\Controllers\Shop\MainController@login')->name('login');

// DECONNEXION DE L'UTILISATEUR
Route::get('/logout', 'App\Http\Controllers\Shop\MainController@logout')->name('logout');

/* REDIRECTION SUR LA VIEW SIGNUP*/
Route::get('/signup', "App\\Http\\Controllers\\shop\\MainController@inscription");
Route::post('/signup', "App\\Http\\Controllers\\shop\\MainController@register")->name('register.send');

/* REDIRECTION SUR LA VIEW Panier*/
Route::get('/panier', "App\\Http\\Controllers\\shop\\Panier@showPanier")->name('panier_show');
Route::post('/panier/add/{id}', "App\\Http\\Controllers\\shop\\Panier@add")->name('panier_add');
Route::delete('/panier/{id}', "App\\Http\\Controllers\\shop\\Panier@suppProduit")->name('panier_supp');

/* REDIRECTION SUR LA VUE CHECKOUT */
Route::get('/checkout', "App\\Http\\Controllers\\shop\\CheckoutController@showCheckout")->name('checkout_show')->middleware('auth'); /*middleware permet de renvoyer sur connexion si il est pas co */

Route::get('/search', "App\\Http\\Controllers\\shop\\MainController@search")->name('search');
