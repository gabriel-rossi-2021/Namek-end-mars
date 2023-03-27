<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS BOOTSTRAP-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">

    <!-- CSS HEADER -->
    <link rel="stylesheet" href="{{ asset('css/Include/style-header.css') }}">

    <!-- Favicons -->
    <link rel="icon" href="{{asset('img/favicon.png')}}" sizes="32x32" type="image/png">
    <meta name="theme-color" content="#712cf9">

    <!-- Flaticon-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-bcf1acfc-f254-4290-bc94-6301a0ab217d"></div>
<header class="site-header sticky-top py-1">
    <div class="collapse navbar-collapse" id="navbarsExample11" style="justify-content:space-between; display: flex;margin-right: 5%;height: 30px">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/menu/logo-noir.png') }}" alt="logo" style="height: 150px;margin-top: 4%"></a>
        <div style="display: flex;">
            <form action="{{ route('search') }}" method="GET">
                <!-- BOUTON RECHERCHER -->
                <img src="{{ asset('img/menu/rechercher.png') }}" style="height: 25px;width: 25px;bottom: 2%;margin-left: 10%" alt="user" title="mon compte" id="search-button">
                <div id="search-overlay">
                    <div id="search-container">
                        <input type="text" placeholder="Recherche..." name="q">
                        <button type="submit" class="btn" id="search-button-after">RECHERCHER</button>
                    </div>
                </div>
            </form>


            @if(auth()->check())
            <div class="btn-group">
                <a class="dropdown-toggle" style="margin-left: 40%;cursor: pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('img/menu/myaccount.png') }}" style="height: 25px;width: 25px;bottom: 2%" alt="user">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- SI L'UTILISATEUR EST CONNECTE -->
                        <a href="{{ route('dashboard') }}">
                            <button class="dropdown-item" type="button">Mon compte</button>
                        </a>

                        <!-- Si l'utilisateur est admin -->
                        @if(Auth::user()->function_id == 1)
                            <a href="/admin">
                                <button class="dropdown-item" type="button">Administration</button>
                            </a>
                        @endif

                        <hr>
                        <a href="{{ route('logout') }}">
                            <button class="dropdown-item" type="button">Déconnexion</button>
                        </a>
                </div>
            </div>
            @else
                <!-- SI L'UTILISATEUR N'EST PAS CONNECTE -->
                <a href="/login" class="a-icon-header">
                    <img src="{{ asset('img/menu/utilisateur.png') }}" alt="user">
                </a>
            @endif

            <a href="/panier" class="a-icon-header">
                <img id="icon-panier-header" src="{{ asset('img/menu/panier.png') }}" alt="panier">
            </a>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar-id">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:center;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="color: #499b4a" href="/">Accueil</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" style="background: #499b4a;color: white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produits
                        </button>
                        <ul class="dropdown-menu dropdown-menu-produit" style="margin-top: 10%;">
                            <div class="drop-item-flex">
                                <li class="dropdown-menu-li">
                                    <a class="dropdown-item" href="/produit"><strong>Nos produits</strong>
                                        <div class="dropdown-menu-li-div">
                                            <img class="" src="{{  asset('img/home/NosProduits.jpeg') }}">
                                        </div></a>
                                </li>
                                <!-- BOUCLE AFFICHE CATEGORIES DANS LE MENU DROP DOWN -->
                                @foreach($categories as $categorie)
                                    <li class="dropdown-menu-li">
                                        <a class="dropdown-item" href="{{ route('voir_products_par_cat', ['id'=>$categorie->id_category]) }}"><strong>{{ $categorie->name_category }}</strong>
                                            <div class="dropdown-menu-li-div">
                                                <img class="" src="{{  asset('img/home/'.$categorie->image_category) }}">
                                            </div></a>
                                    </li>
                                @endforeach
                            </div>
                        </ul>
                    </div>

                    <li class="nav-item">
                        <a style="color: #499b4a" class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>

        var searchButton = document.getElementById("search-button");
        var searchOverlay = document.getElementById("search-overlay");
        var navbarId = document.getElementById('navbar-id');

        /* PERMET LORS DU CLIC SUR L'ICON DE PASSER LE CODE DE LA RECHERCHE EN MODE BLOCK */
        searchButton.addEventListener("click", function() {
            searchOverlay.style.display = "block";
            navbarId.style.background = "transparent"; /* METTRE LE MENU EN BACKGROUND TRANSPARENT */
        });

        /* PERMET LORSQU'ON RE CLIQUE DE METTRE LE BLOCK DISPLAY NONE */
        searchOverlay.addEventListener("click", function(event) {
            if (event.target == searchOverlay) {
                searchOverlay.style.display = "none";
            }
        });

    </script>
</header>
