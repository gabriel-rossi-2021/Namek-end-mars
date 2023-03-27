<!doctype html>
<html lang="fr">
<head>
    @include('Include/header')
    <title>NamekCBD - {{ $details->name_product }}</title>

    <link rel="stylesheet" href="{{ asset('css/style-details.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container-details">
    <div class="card-container-details">
        <input type="radio" name="colors-btn" id="color-1" checked>
        <div class="shoe-area">
            <div class="floating-div-details">
                <div class="shoe-1"><img src="{{ asset('img/Products/'.$details->image_product) }}" alt="red-nike"></div>
            </div>
        </div>
        <div class="text-area-details">
            <div class="heading-area">
                <h2>{{$details->name_product}}</h2>
                <!-- IF permet d'afficher ml si c'est de l'huile et gr si c'est le reste -->
                <h4 id="size">{{ $details->size }} <?php
                                                   if ($details->category_id == 2){
                                                       echo 'ml';
                                                   }else{
                                                       echo 'gr';
                                                   }
                                                   ?></h4>
            </div>

            <p class="paragraph-area">
            {{ $details->description }}
            <ul>
                <li>Filtre : <a href="{{ route('voir_products_par_cat', ['id'=>$details->category->id_category]) }}"><span id="name_category">{{ $details->category->name_category }}</span></a></li>
                <li>Culture : <span>{{$details->culture}}</span></li>
                <li>Taux de CBD: <span>{{ number_format($details->cbd_rate,0)}}<?php if($details->category_id == 3){echo 'mg';}else{echo '%';}?></span></li>
                <li>Taux de THC: <span>{{ number_format($details->thc_rate,0)}}%</span></li>
                <li>Livraison : <span>Gratuite</span></li>
                <li>En stock : <span>{{$details->available}}</span></li>
            </ul>
            </p>
            <form method="POST" action="{{ route('panier_add', ['id'=>$details->id_product]) }}" id="panier_add">
                @csrf
                <select class="form-select" aria-label="Default select example" name="quantity" style="width: 50%;margin: 0 auto;background: #f5f5f5">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </form>
            <div class="price-and-buy-btn">
                <h2 class="price-1" style="margin: 0 auto;">{{ $details->prixTTC() }} CHF</h2>
                <button type="submit" class="btn view-product-button" id="panier-btn"form="panier_add">AJOUTER AU PANIER<img style="height: 25px;width: 25px;margin-bottom: 2%;margin-left: 5%" src="{{ asset('img/menu/panier.png') }}" alt="panier"></button>
            </div>
        </div>
    </div>
</div>

<!-- VOUS AIMEREZ AUSSI -->
@if(count($details->recommandation) > 0)
    <h1 class="title title-phone">Vous aimerez aussi</h1>
    <div class="container py-5">
        <div class="row">
            @foreach($details->recommandation as $produit_recommande )
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 div-produit-content">
                    <div class="card" style="box-shadow: 0 15px 20px -12px #499b4a;">
                        <img src="{{ asset('img/Products/'.$produit_recommande->image_product) }}" class="card-img-top" alt="lemon haze" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="{{ route('voir_products_par_cat', ['id'=>$produit_recommande->category->id_category]) }}" class="text-muted"><span>{{ $produit_recommande->category->name_category }}</a></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">{{ $produit_recommande->name_product }}</h5>
                                <h5 class="text-dark mb-0">{{ $produit_recommande->prixTTC() }} / {{ $produit_recommande->size }}gr</h5>
                            </div>
                            <div class="d-flex flex-row">
                                <a href="{{ route('detail_produit', ['id'=>$produit_recommande->id_product]) }}" style="width:100%;" class="btn-green">
                                    <button type="button" class="btn flex-fill ms-1 view-product-button" style="width: 100%;">VOIR LE PRODUIT</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

<!-- AVIS CLIENTS -->
<h1 class="title">Avis sur {{ $details->name_product }}</h1>
<div class="carousel-container">
    <div class="carousel-inner">
        <div class="carousel-item active" onclick="showSlide()">
            <!-- top -->
            <div class="box-top">
                <!-- profile -->
                <div class="profile">
                    <!-- img -->
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <!-- name-and-username -->
                    <div class="name-user">
                        <strong>Liam mendes</strong>
                        <span>@liammendes</span>
                    </div>
                </div>
                <!-- reviews -->
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i> <!-- Empty star -->
                </div>
            </div>
            <!-- comments -->
            <div class="client-comment">
                <p>Ce produits est de très bonne qualité, un goût très prononcé. Je recommande ! </p>
            </div>
        </div>
        <div class="carousel-item" onclick="showSlide()">
            <!-- top -->
            <div class="box-top">
                <!-- profile -->
                <div class="profile">
                    <!-- img -->
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <!-- name-and-username -->
                    <div class="name-user">
                        <strong>Gabriel Rossi</strong>
                        <span>@liammendes</span>
                    </div>
                </div>
                <!-- reviews -->
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i> <!-- Empty star -->
                </div>
            </div>
            <!-- comments -->
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <div class="carousel-item" onclick="showSlide()">
            <!-- top -->
            <div class="box-top">
                <!-- profile -->
                <div class="profile">
                    <!-- img -->
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <!-- name-and-username -->
                    <div class="name-user">
                        <strong>Tabernak mendes</strong>
                        <span>@liammendes</span>
                    </div>
                </div>
                <!-- reviews -->
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i> <!-- Empty star -->
                </div>
            </div>
            <!-- comments -->
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" role="button" data-slide="prev" onclick="prevSlide()">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <img src="{{asset('img/fleche-gauche.png')}}"/>
    </a>
    <a class="carousel-control-next" role="button" data-slide="next" onclick="nextSlide()">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <img src="{{asset('img/fleche-droite.png')}}"/>
    </a>
</div>

<!-- AJOUTER UN AVIS -->
<h1 class="title">Ajouter un avis</h1>
@if(auth()->check())
    <div class="card-avis">
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="text"><b>Commentaire</b></label><br>
                        <textarea placeholder="Ce produit est de très bonne qualité" id="input"></textarea>
                    </td>
                </tr>
                <tr>
                    <td id="center-star-td">
                        <div class="star-rating">
                            <input id="star-1" type="radio" name="rating" value="1">
                            <label for="star-1" class="star">&#9733;</label>
                            <input id="star-2" type="radio" name="rating" value="2">
                            <label for="star-2" class="star">&#9733;</label>
                            <input id="star-3" type="radio" name="rating" value="3">
                            <label for="star-3" class="star">&#9733;</label>
                            <input id="star-4" type="radio" name="rating" value="4">
                            <label for="star-4" class="star">&#9733;</label>
                            <input id="star-5" type="radio" name="rating" value="5">
                            <label for="star-5" class="star">&#9733;</label>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="cta-btn">Envoyer</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@else
    <div class="card-avis">
        <p style="text-align:center">Pour ajouter un commentaire, merci de se connecter</p>
        <table>
            <tr>
                <td style="text-align:center">
                    <div class="d-flex flex-row" style="justify-content: center;">
                        <a href="/login" style="width:50%;" class="btn-green">
                            <button type="button" class="btn flex-fill ms-1 view-product-button" style="width: 100%;">Se connecter</button>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endif
</body>
<script>
    // Récupérer les éléments du DOM
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('#prev');
    const nextButton = document.querySelector('#next');
    // Initialiser l'index courant
    let currentIndex = 0;
    // Fonction pour afficher le slide précédent
    function prevSlide() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = carouselItems.length - 1;
        }
        showSlide(currentIndex);
    }
    // Fonction pour afficher le slide suivant
    function nextSlide() {
        currentIndex++;
        if (currentIndex >= carouselItems.length) {
            currentIndex = 0;
        }
        showSlide(currentIndex);
    }
    function showSlide(index) {
        if (index >= 0 && index < carouselItems.length) {
            carouselItems.forEach(item => {
                item.classList.remove('active');
            });
            carouselItems[index].classList.add('active');
        } else {
            console.error("Invalid index: " + index);
        }
    }
    // Ajouter les écouteurs d'événements aux flèches
    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);
    // Afficher le premier slide
    showSlide(currentIndex);
</script>

@include('Include/footer')
</html>
