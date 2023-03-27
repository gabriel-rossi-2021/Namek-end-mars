<!-- CSS FOOTER -->
<link rel="stylesheet" href="{{ asset('css/Include/style-footer.css') }}">
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
<div class="flecheTop" style="display:none">
    <a href="#"><img src="{{ asset('img/topFleche.png') }}"></a>
</div>
    <!-- Section: Links  -->
    <section class="" style="background-color: white">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Produits
                    </h6>
                    <p>
                        <a href="/category/1" class="text-reset">Nos plantes</a>
                    </p>
                    <p>
                        <a href="/category/2" class="text-reset">Nos huiles</a>
                    </p>
                    <p>
                        <a href="/category/3" class="text-reset">Nos bonbons</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Liens rapide
                    </h6>
                    <p>
                        <a href="/" class="text-reset">Accueil</a>
                    </p>
                    <p>
                        <a href="/produit" class="text-reset">Nos produits</a>
                    </p>
                    <p>
                        <a href="/contact" class="text-reset">Contact</a>
                    </p>
                </div>

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p id="size-rue"><i class="fas fa-home me-3 text-secondary"></i> Lausanne, Chemin des Plaines 4</p>
                    <p>
                        <i class="fas fa-envelope me-3 text-secondary"></i>
                        namekcbd@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> +41 78 823 78 18</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->
    <p class="line-separation"></p>
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: white; color: #499b4a">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="/">Namek</a>
    </div>

    <!-- PERMET D'AFFICHER LA FLÊCHE "BACK TOP" A PARTIR DE 110% DU TOP -->
    <script>
        function checkScroll() {
            var top = window.scrollY || window.pageYOffset;
            var screenHeight = window.innerHeight;
            var topThreshold = screenHeight * 1.1;
            var flecheTop = document.querySelector('.flecheTop');

            if (top > topThreshold) {
                flecheTop.style.display = 'block';
            } else {
                flecheTop.style.display = 'none';
            }
        }

        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);
    </script>
    <!-- JS -->
    <script src="{{ asset('js/bootstrap.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>

</footer>
