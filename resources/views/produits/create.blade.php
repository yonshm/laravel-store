<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary">Ajouter un Produit</h1>
        <form action="{{route('produits.store')}}" method="POST" enctype="multipart/form-data" class="shadow-lg p-4 rounded bg-light">
            @csrf
            <!-- Nom -->
            <div class="">
                <label for="nom" class="form-label fw-bold">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom du produit" required>
            </div>
            
            <!-- Prix -->
            <div class="mb-3">
                <label for="prix" class="form-label fw-bold">Prix :</label>
                <input type="text" name="prix" id="prix" class="form-control" placeholder="Entrez le prix" required>
            </div>
            
            <!-- Quantité -->
            <div class="mb-3">
                <label for="quantite" class="form-label fw-bold">Quantité :</label>
                <input type="number" name="quantite" id="quantite" class="form-control" placeholder="Entrez la quantité" required>
            </div>
            
            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description :</label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Entrez la description"></textarea>
            </div>
            
            <!-- Catégorie -->
            <div class="mb-3">
                <label for="categorie" class="form-label fw-bold">Catégorie :</label>
                <select name="categorie_id" id="categorie" class="form-select" required>
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach ($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->nom}}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Image :</label>
                <input type="file" id="image" name="image" class="form-control" accept="images/*">
            </div>
            
            <!-- Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg px-4 shadow-sm">Ajouter</button>
            </div>
        </form>
    </div>
    
        
</body>
</html>