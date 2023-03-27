<!doctype html>
<html lang="fr">
<head>
    @include('Include/header');
    <title>NamekCBD - {{ isset($category) ? $category->name_category : 'Produits' }}</title>

    <!-- CSS LOGIN -->
    <link rel="stylesheet" href="{{ asset('css/style-products.css') }}">
</head>
<body>

@yield('product')

@include('Include/footer')
</body>
</html>
