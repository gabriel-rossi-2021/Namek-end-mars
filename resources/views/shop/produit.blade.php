@extends('products')
@section('product')
    <div class="container">
        <!-- SAVOIR SI $category EXISTE -->
        @if (isset($category))
            <div class="background-about">
                <div class="about-category">
                    <div class="image-category">
                        <img src="{{ asset('img/home/'.$category->image_category_no_bg) }}"/>
                    </div>
                    <div class="Titre-category" style="margin-left: 10%;margin-top: 2%">
                        <h1>{{ $category->name_category }}</h1><br> <!-- SI OUI AFFICHE CE QU EST DANS LE IF-->
                        <p>{{ $category->description_category }}</p>
                    </div>
                </div>
            </div>

        @else
            <h1 style="text-align: center;">Tous les produits</h1><br><!-- SI NON AFFICHE "Tous les produits"-->
        @endif

        <div class="filter">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">En stock</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tri" id="prix-croissant" value="prix-croissant">
                <label class="form-check-label" for="prix-croissant">
                    Prix croissant
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tri" id="prix-decroissant" value="prix-decroissant">
                <label class="form-check-label" for="prix-decroissant">
                    Prix décroissant
                </label>
            </div>
        </div>


        <div class="row products-div">
            @foreach($produits as $produit)
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 product-card">
                    <div class="card" style="box-shadow: 0 15px 20px -12px #499b4a;">
                        <img src="{{ asset('img/Products/'.$produit->image_product) }}" class="card-img-top" alt="lemon haze" style="height: 250px;width: 50%;margin:auto" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="{{ route('voir_products_par_cat', ['id'=>$produit->category->id_category]) }}" class="text-muted">{{ $produit->category->name_category }}</a></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">{{ $produit->name_product }}</h5>
                                <h5 class="text-dark mb-0">{{ $produit->prixTTC() }} CHF / {{ $produit->size }} <?php
                                                                                                                    if ($produit->category_id == 2){
                                                                                                                        echo 'ml';
                                                                                                                    }else{
                                                                                                                        echo 'gr';
                                                                                                                    }
                                                                                                                    ?></h5>
                            </div>

                            <!-- STOCK % NOTE PRODUIT
                        <div class="d-flex justify-content-between mb-2">
                            <p class="text-muted mb-0">En stock : <span class="fw-bold">{{ $produit->available }}</span></p>
                            <div class="ms-auto text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        -->
                            <div class="d-flex flex-row">
                                <a href="{{ route('detail_produit', ['id'=>$produit->id_product]) }}" style="width:100%;" class="btn-green">
                                    <button type="button" class="btn flex-fill ms-1 view-product-button" style="width: 100%;">VOIR LE PRODUIT</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
    <script>
        // Sélectionnez tous les boutons radio avec un nom d'attribut "tri"
        const radios = document.querySelectorAll('input[type="radio"][name="tri"]');
        // Ajoutez l'événement "click" à chaque bouton radio
        radios.forEach(radio => {
            radio.addEventListener('click', function(event) {
                // Empêcher le formulaire de se soumettre
                event.preventDefault();
                // Récupérer la valeur du bouton radio sélectionné
                const tri = this.value;
                // Obtenir l'URL actuelle
                const currentUrl = window.location.href;
                // Vérifier si l'URL contient déjà un paramètre "tri"
                const hasTriParam = currentUrl.includes('tri=');
                // Si l'URL contient déjà un paramètre "tri", remplacer sa valeur
                // sinon ajouter un nouveau paramètre "tri"
                if (hasTriParam) {
                    const regex = /([?&])tri=[^&]*(&|$)/;
                    const newUrl = currentUrl.replace(regex, `$1tri=${tri}$2`);
                    window.location.href = newUrl;
                } else {
                    window.location.href = `${currentUrl}${currentUrl.includes('?') ? '&' : '?'}tri=${tri}`;
                }
            });
        });
    </script>


@endsection
