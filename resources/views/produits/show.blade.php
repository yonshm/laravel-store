<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa9INnHJB05p3OFevFQksbsI2GzC/yhyF+KIo2jkz7f6C5aeFlLY8CjcEg+" crossorigin="anonymous">

<!-- Optional Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <h1 class="text-center mb-4">Les informations du produit N° {{$produit->id}}</h1>
    <div class="card shadow p-4">
        <div class="card-body">
            <p><strong>Nom :</strong> {{$produit->nom}}</p>
            <p><strong>Prix :</strong> {{$produit->prix}} MAD</p>
            <p><strong>Quantité :</strong> {{$produit->quantite}}</p>
            <p><strong>Catégorie :</strong> {{$produit->categorie ? $produit->categorie->nom : 'Non spécifiée'}}</p>
            <p><strong>Image :</strong></p>
            <img src="{{asset('storage/' . $produit->image)}}" alt="Image du produit" class="img-fluid rounded" style="max-width: 150px; height: auto;">
        </div>
        <div class="card-footer text-center">
            <a href="{{route('produits.index')}}" class="btn btn-primary">Retournez à la liste</a>
        </div>
    </div>
</div>
