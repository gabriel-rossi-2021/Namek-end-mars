<!doctype html>
<html lang="fr">
<head>
    @include('Include/header');
    <title>NamekCBD - Contact</title>

    <!-- CSS CONTACT -->
    <link rel="stylesheet" href="{{ asset('css/style-contact.css') }}">
</head>
<body>
    <div class="container">
        <h1>Résultats pour "{{ $query }}" </h1>

        @if (count($products) > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nom du produit</th>
                    <th>Image</th>
                    <th>Lien</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name_product }}</td>
                        <td><img  style="height: 60px;width: 50px" src="{{ asset('img/Products/'.$product->image_product) }}"/></td>
                        <td><a class="btn btn-green" id="btn-search" href="{{ route('detail_produit', ['id' => $product->id_product]) }}">S'y rendre</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun résultat trouvé pour "{{ $query }}".</p>
        @endif
    </div>
    @include('Include/footer')
</body>
