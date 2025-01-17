<div>
    <h1>Edit le client ayat l'id N° {{$produit->id}}</h1>
    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('produits.update',$produit->id)}}" method="POST" enctype="multipart/form-data" class="shadow-lg p-4 rounded bg-light">
        @csrf
        @method('PUT')
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" value="{{old('nom',$produit->nom)}}">
        </div>
        <div>
            <label for="prix">Prix :</label>
            <input type="text" name="prix" value="{{old('prix',$produit->prix)}}">
        </div>
        <div>
            <label for="quantite">Quantite :</label>
            <input type="number" name="quantite" value="{{old('quantite',$produit->quantite)}}">
        </div>
        
        <div>
            <label for="description">Description :</label><br>
            <textarea name="description" id="description" cols="30" rows="5" >{{old('description',$produit->description)}}</textarea>
        </div>
        <div>
            <label for="img">Image</label>
            <img src="{{ asset('storage/' . $produit->image)}}" alt="">
            <input type="file" id="image" name="image" class="form-control" accept="images/*">
        </div>
        <div>
            <label for="categorie">Categorie :</label>
            <select name="categorie_id" id="" >
                <option value="-1">Selectionnez une categorie</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}" {{$produit->categorie_id == $cat->id ? 'selected' : '' }}>{{$cat->nom}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Ajouter">
    </form>
</div>
