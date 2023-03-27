<!doctype html>
<html lang="fr">
<head>
    @include('Include/header');
    <title>NamekCBD - Passer la commande</title>

    <!-- CSS LOGIN -->
    <link rel="stylesheet" href="{{ asset('css/style-checkout.css') }}">
</head>
<body>
<div class="container py-5">
    <div class="col">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="#flush-collapseOne">
                        1. Livraison
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="sc-1hq5763-0 tyqLi">
                            <h5 class="sc-1j7w3gf-3 sc-1hq5763-1 jRgFgA">Adresse de livraison</h5>
                            {{ $user->last_name }} {{ $user->first_name }}<br>{{ $user->address->street }}, {{ $user->address->street_number }}<br>{{ $user->address->NPA }} {{ $user->address->city }}<br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        2. Aperçu de la commande
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="container">
                            <table id="cart" class="table table-hover table-condensed">
                                <thead>
                                <tr>
                                    <th style="width:50%">Product</th>
                                    <th style="width:8%" class="text-center">Quantité</th>
                                    <th style="width: 22%" class="text-center">Unitaire HT</th>
                                    <th style="width:22%" class="text-center">Total</th>
                                    <th style="width:10%"></th>
                                </tr>
                                </thead>
                                @foreach($content as $produit)
                                <form method="POST" action="#" id="form-panier">
                                    @csrf
                                    <tbody>
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-2 hidden-xs"><img style="height: 100px;width: 100px" src="{{ asset('img/Products/'. $produit->attributes['image']) }}" alt="image produit" class="img-responsive" /></div>
                                                    <div class="col-sm-10">
                                                        <h5 id="recap-name-produit">{{$produit->name}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Quantity">
                                                <p class="text-center" value="">{{ $produit->quantity }}</p>
                                            </td>
                                            <td data-th="Price TTC" class="text-center">{{ number_format(($price_ht[$loop->index] * (1 + 0.077)) / $produit->quantity, 2) }}</td>
                                            <td data-th="Subtotal" class="text-center">{{ number_format($produit->attributes['prix_ttc'], 2) }}</td>
                                        </tr>
                                    </tbody>
                                </form>
                                @endforeach
                            </table>
                        </div>
                        <h5>Résumé : </h5>
                        <p id="prix-ttc">TOTAL HT : {{number_format($total_ht_panier, 2)}} CHF</p>
                        <p id="prix-ttc">FRAIS TVA : {{number_format($tva, 2)}} CHF</p>
                        <h6 id="prix-ttc">TOTAL TTC : {{number_format($total_ttc_panier, 2)}} CHF</h6>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        3. Paiement
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="sc-1hq5763-0 tyqLi">
                            <h5 class="sc-1j7w3gf-3 sc-1hq5763-1 jRgFgA">Adresse de facturation</h5>
                            {{ $user->last_name }} {{ $user->first_name }}<br>{{ $user->address->street }}, {{ $user->address->street_number }}<br>{{ $user->address->NPA }} {{ $user->address->city }}<br>
                        </div>
                    </div>
                    <br>
                    <div class="accordion-body">
                        <div class="sc-1hq5763-0 tyqLi">
                            <h5 class="sc-1j7w3gf-3 sc-1hq5763-1 jRgFgA">Moyen de paiement</h5>
                        </div>
                    </div>
                        <div class="container-radio-payment">
                            <div class="radio_container">
                                <input type="radio" name="radio" id="one">
                                <label for="one"><img src="{{ asset('img/carte-bancaire.png') }}" style="height: 32px"></label>

                                <input type="radio" name="radio" id="two">
                                <label for="two"><img src="{{ asset('img/paypal.png') }}" style="height: 32px"></label>

                                <input type="radio" name="radio" id="three">
                                <label for="three"><img  src="{{ asset('img/bill.png') }}" style="height: 32px"></label>
                            </div>
                        </div>
                        <!-- CHOIX carte de crédit -->
                        <div class="container-carteCredit" id="form-payment-id" style="display: none" >

                            <section class="card" id="card">

                                <div class="front">
                                    <img src="https://raw.githubusercontent.com/falconmasters/formulario-tarjeta-credito-3d/master/img/chip-tarjeta.png" class="chip">
                                    <div class="details">
                                        <div class="group" id="number">
                                            <p class="label">Card Number</p>
                                            <p class="number">#### #### #### ####</p>
                                        </div>
                                        <div class="flexbox">
                                            <div class="group" id="name">
                                                <p class="label"> Card's Holder </p>
                                                <p class="name">John Doe</p>
                                            </div>

                                            <div class="group" id="expiration">
                                                <p class="label">Expiration</p>
                                                <p class="expiration"> <span class="month">MM</span> / <span class="year">YY</span> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="magnetic-bar"></div>
                                    <div class="details">
                                        <div class="group" id="signature">
                                            <p class="label"style="color: white">Signature</p>
                                            <div class="signature">
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="group" id="ccv">
                                            <p class="label" style="color: white">CCV</p>
                                            <p class="ccv"></p>
                                        </div>

                                    </div>
                                    <p class="legend">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <a href="#" class="bank-link">http://dabank.onion</a>
                                </div>
                            </section>

                            <!-- container-carteCredit Button to open the form -->
                            <div class="container-btn">
                                <button class="btn-open-form" id="btn-open-form">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>

                            <!-- Form -->
                            <form action="" id="card-form" class="card-form">

                                <div class="group">
                                    <label for="inputNumber">Numéro de carte</label>
                                    <input type="text" id="inputNumber" maxlength="19" autocomplete="off">
                                </div>

                                <div class="group">
                                    <label for="inputHolder">Titulaire de la carte</label>
                                    <input type="text" id="inputHolder" maxlength="19" autocomplete="off">
                                </div>


                                <div class="flexbox">

                                    <div class="group expire">

                                        <label for="selectMonth">Expiration</label>

                                        <div class="flexbox">

                                            <div class="group-select">

                                                <select name="month" id="selectMonth">
                                                    <option disabled selected> Mois </option>
                                                </select>

                                                <i class="fas fa-angle-down"></i>

                                            </div>


                                            <div class="group-select">

                                                <select name="year" id="selectYear">
                                                    <option disabled selected> Année </option>
                                                </select>

                                                <i class="fas fa-angle-down"></i>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="group ccv">
                                        <label for="inputCCV">CVV</label>
                                        <input type="text" id="inputCCV" maxlength="3">
                                    </div>
                                </div>
                                <button type="submit" class="btn-submit"> Payer </button>
                            </form>
                            <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
                            <script src="app.js"></script>
                        </div>
                        <!-- CHOIX Paypal -->
                        <a href="#" class="paypal-buy-now-button" id="buttonPayapl">
                            <span>Buy now with</span>
                            <svg aria-label="PayPal" xmlns="http://www.w3.org/2000/svg" width="90" height="33" viewBox="34.417 0 90 33">
                                <path fill="#253B80" d="M46.211 6.749h-6.839a.95.95 0 0 0-.939.802l-2.766 17.537a.57.57 0 0 0 .564.658h3.265a.95.95 0 0 0 .939-.803l.746-4.73a.95.95 0 0 1 .938-.803h2.165c4.505 0 7.105-2.18 7.784-6.5.306-1.89.013-3.375-.872-4.415-.972-1.142-2.696-1.746-4.985-1.746zM47 13.154c-.374 2.454-2.249 2.454-4.062 2.454h-1.032l.724-4.583a.57.57 0 0 1 .563-.481h.473c1.235 0 2.4 0 3.002.704.359.42.469 1.044.332 1.906zM66.654 13.075h-3.275a.57.57 0 0 0-.563.481l-.146.916-.229-.332c-.709-1.029-2.29-1.373-3.868-1.373-3.619 0-6.71 2.741-7.312 6.586-.313 1.918.132 3.752 1.22 5.03.998 1.177 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91a.57.57 0 0 0 .562.66h2.95a.95.95 0 0 0 .939-.804l1.77-11.208a.566.566 0 0 0-.56-.657zm-4.565 6.374c-.316 1.871-1.801 3.127-3.695 3.127-.951 0-1.711-.305-2.199-.883-.484-.574-.668-1.392-.514-2.301.295-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.499.589.697 1.411.554 2.317zM84.096 13.075h-3.291a.955.955 0 0 0-.787.417l-4.539 6.686-1.924-6.425a.953.953 0 0 0-.912-.678H69.41a.57.57 0 0 0-.541.754l3.625 10.638-3.408 4.811a.57.57 0 0 0 .465.9h3.287a.949.949 0 0 0 .781-.408l10.946-15.8a.57.57 0 0 0-.469-.895z"></path>
                                <path fill="#179BD7" d="M94.992 6.749h-6.84a.95.95 0 0 0-.938.802l-2.767 17.537a.57.57 0 0 0 .563.658h3.51a.665.665 0 0 0 .656-.563l.785-4.971a.95.95 0 0 1 .938-.803h2.164c4.506 0 7.105-2.18 7.785-6.5.307-1.89.012-3.375-.873-4.415-.971-1.141-2.694-1.745-4.983-1.745zm.789 6.405c-.373 2.454-2.248 2.454-4.063 2.454h-1.031l.726-4.583a.567.567 0 0 1 .562-.481h.474c1.233 0 2.399 0 3.002.704.358.42.467 1.044.33 1.906zM115.434 13.075h-3.272a.566.566 0 0 0-.562.481l-.146.916-.229-.332c-.709-1.029-2.289-1.373-3.867-1.373-3.619 0-6.709 2.741-7.312 6.586-.312 1.918.131 3.752 1.22 5.03 1 1.177 2.426 1.666 4.125 1.666 2.916 0 4.532-1.875 4.532-1.875l-.146.91a.57.57 0 0 0 .563.66h2.949a.95.95 0 0 0 .938-.804l1.771-11.208a.57.57 0 0 0-.564-.657zm-4.565 6.374c-.314 1.871-1.801 3.127-3.695 3.127-.949 0-1.711-.305-2.199-.883-.483-.574-.666-1.392-.514-2.301.297-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.501.589.699 1.411.554 2.317zM119.295 7.23l-2.807 17.858a.569.569 0 0 0 .562.658h2.822c.469 0 .866-.34.938-.803l2.769-17.536a.57.57 0 0 0-.562-.659h-3.16a.571.571 0 0 0-.562.482z"></path>
                            </svg>
                        </a>
                        <!-- CHOIX facture -->
                        <h5 style="display: none;text-align: center;" id="buttonFacture">En cours de construction</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    // Radio Carte de crédit
        const formPayment = document.getElementById('form-payment-id');
        const creditCardRadio = document.getElementById('one');

        creditCardRadio.addEventListener('change', function() {
            if (this.checked) {
                formPayment.style.display = 'flex';
                buttonPaypal.style.display = 'none';
                buttonFacture.style.display = 'none';
            } else {
                formPayment.style.display = 'none';
            }
        });

    // Radio Paypal
        const buttonPaypal = document.getElementById('buttonPayapl');
        const paypalRadio = document.getElementById('two');

        paypalRadio.addEventListener('change', function() {
            if (this.checked) {
                buttonPaypal.style.display = 'flex';
                formPayment.style.display = 'none';
                buttonFacture.style.display = 'none';
            } else {
                buttonPaypal.style.display = 'none';
            }
        });

    // Radio Facture
    const buttonFacture = document.getElementById('buttonFacture');
    const factureRadio = document.getElementById('three');

    factureRadio.addEventListener('change', function() {
        if (this.checked) {
            buttonFacture.style.display = 'flex';
            formPayment.style.display = 'none';
            buttonPaypal.style.display = 'none';
        } else {
            buttonFacture.style.display = 'none';
        }
    });


    const card = document.querySelector('#card'),
        btnOpenForm = document.querySelector('#btn-open-form'),
        form = document.querySelector('#card-form'),
        cardNumber = document.querySelector('#card .number'),
        cardName = document.querySelector('#card .name'),
        brandLogo = document.querySelector('#brand-logo'),
        signature = document.querySelector('#card .signature p'),
        monthExpDate = document.querySelector('#card .month'),
        yearExpDate = document.querySelector('#card .year');
    ccv = document.querySelector('#card .ccv');

    // * Flip the card to show the front and vice versa.
    const flipCard = () => {
        if(card.classList.contains('active')){
            card.classList.remove('active');
        }
    }

    // * Card rotation
    card.addEventListener('click', () => {
        card.classList.toggle('active');
    });


    // * Button to open the form
    btnOpenForm.addEventListener('click', () => {
        btnOpenForm.classList.toggle('active');
        form.classList.toggle('active');
    });

    // * Select month dinamically.
    for(let i = 1; i <= 12; i++){
        let option = document.createElement('option');
        option.value = i;
        option.innerText = i;
        form.selectMonth.appendChild(option);
    }

    // * Select year dinamically.
    const currentYear = new Date().getFullYear();
    for(let i = currentYear; i <= currentYear + 8; i++){
        let option = document.createElement('option');
        option.value = i;
        option.innerText = i;
        form.selectYear.appendChild(option);
    }


    form.inputNumber.addEventListener('keyup', (e) => {
        let inputValue = e.target.value;

        form.inputNumber.value = inputValue
            // Reject Spaces
            .replace(/\s/g, '')
            // Reject letters
            .replace(/\D/g, '')
            // Place an space each four numbers
            .replace(/([0-9]{4})/g, '$1 ')
            // Delete the last space
            .trim();

        cardNumber.textContent = inputValue;

        if(inputValue == ''){
            cardNumber.textContent = '#### #### #### ####';

            brandLogo.innerHTML = '';
        }

        if(inputValue[0] == 4){
            brandLogo.innerHTML = '';
            const image = document.createElement('img');
            image.src = 'https://raw.githubusercontent.com/falconmasters/formulario-tarjeta-credito-3d/master/img/logos/visa.png';
            brandLogo.appendChild(image);
        } else if(inputValue[0] == 5){
            brandLogo.innerHTML = '';
            const image = document.createElement('img');
            image.src = 'https://raw.githubusercontent.com/falconmasters/formulario-tarjeta-credito-3d/master/img/logos/mastercard.png';
            brandLogo.appendChild(image);
        }

        // Card is flipped to the front to be shown to the user
        flipCard();
    });


    // * Input Card Holder's Name
    form.inputHolder.addEventListener('keyup', (e) => {
        let inputValue = e.target.value;

        form.inputHolder.value = inputValue.replace(/[0-9]/g, '');
        cardName.textContent = inputValue;
        signature.textContent = inputValue;

        if(inputValue == ''){
            cardName.textContent = 'Jhon Doe';
        }

        flipCard();
    });

    // * Select Month
    form.selectMonth.addEventListener('change', (e) => {
        monthExpDate.textContent = e.target.value;
        flipCard();
    });

    // * Select Year
    form.selectYear.addEventListener('change', (e) => {
        yearExpDate.textContent = e.target.value.slice(2);
        flipCard();
    });


    // * CCV
    form.inputCCV.addEventListener('keyup', () => {
        if(!card.classList.contains('active')){
            card.classList.toggle('active');
        }

        form.inputCCV.value = form.inputCCV.value
            // Reject Spaces
            .replace(/\s/g, '')
            // Reject letters
            .replace(/\D/g, '');

        ccv.textContent = form.inputCCV.value;
    });
</script>

@include('Include/footer')
</body>
