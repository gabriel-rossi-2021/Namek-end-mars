<!doctype html>
<html lang="fr">
<head>
    @include('Include/header')
    <title>NamekCBD - Accueil</title>

    <!-- CSS HOME -->
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
</head>
<body>
<main>
    <!-- CAROUSEL DE DIAPO -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- DIAPO 1 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img img-welcome" width="100%" height="100%" src="{{ asset('img/home/welcome.png') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="container">
                    <div class="carousel-caption" style="bottom: 6em">
                        <h1 style="color: white">Bienvenue à Namek</h1>
                        <p>Le paradis du CBD</p>
                        @if(auth()->check())
                            <p><a class="btn btn-lg btn-green" href="/dashboard">Mon compte</a></p>
                        @else
                            <p><a class="btn btn-lg btn-green" href="/login">Se connecter</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT US -->
    <div class="wrapper">
        <h1>Qui sommes-nous</h1>
        <div class="quote">
            <span><strong>- Namek est une entreprise Suisse -</strong></span>
            <p></br>L'équipe Namek est jeune et dynamique. Nous travaillons chaque jour pour proposer à nos clients le meilleur rapport qualité-prix ! Nous sommes tous les jours à la recherche des meilleures produits de CBD.
                <br><br>
                Travailleurs et à l'écoute, notre service clients est disponible 6j/7. N'hésitez pas à nous contacter, nous serons ravis de pouvoir vous aider.
            </p>
        </div>
    </div>

    <!-- CATEGORIES -->
    <h1 style="text-align: center;margin-top: 5%">Catégories</h1>

    @yield('category')


    <section>
        <h1 style="text-align: center;">Meilleures ventes</h1>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 div-produit-content">
                    <div class="card" style="box-shadow: 0 15px 20px -12px #499b4a;">
                        <img src="{{ asset('img/Products/Myrtille.png') }}" class="card-img-top" alt="lemon haze" style="height: 250px;" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Fleurs</a></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Lemon haze</h5>
                                <h5 class="text-dark mb-0">30 CHF / 3gr</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">En stock : <span class="fw-bold">6</span></p>
                                <div class="ms-auto text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <a href="details/4"><button type="button" class="btn flex-fill me-1" data-mdb-ripple-color="dark" style="background: #499b4a;color: white">
                                        DETAILS
                                    </button></a>
                                <button type="button" class="btn btn-danger flex-fill ms-1">AJOUTER AU PANIER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card" style="  box-shadow: 0 15px 20px -12px #499b4a;">
                        <img src="{{ asset('img/Products/Framboise.png') }}" class="card-img-top" alt="lemon haze" style="height: 250px;" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Resines</a></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Afghan premium V2</h5>
                                <h5 class="text-dark mb-0">35 CHF / 10gr</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">En stock : <span class="fw-bold">2</span></p>
                                <div class="ms-auto text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <a href="/details"><button type="button" class="btn flex-fill me-1" data-mdb-ripple-color="dark" style="background: #499b4a;color: white">
                                        DETAILS
                                    </button></a>
                                <button type="button" class="btn btn-danger flex-fill ms-1">AJOUTER AU PANIER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card" style="  box-shadow: 0 15px 20px -12px #499b4a;">
                        <img src="{{ asset('img/Products/Pomme.png') }}" class="card-img-top" alt="lemon haze" style="height: 250px;" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">e-liquid</a></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Bonbon - Myrtille</h5>
                                <h5 class="text-dark mb-0">39.9 CHF / 50 ml</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">En stock : <span class="fw-bold">18</span></p>
                                <div class="ms-auto text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <a href="/details"><button type="button" class="btn flex-fill me-1" data-mdb-ripple-color="dark" style="background: #499b4a;color: white" >DETAILS</button></a>
                                <button type="button" class="btn btn-danger flex-fill ms-1">AJOUTER AU PANIER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('Include/footer')
</body>
</html>
