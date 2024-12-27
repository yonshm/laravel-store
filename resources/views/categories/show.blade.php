<div>
    <h1>details de la categorie N° {{$categorie->id}}</h1>
    <p>
        <strong>Nom : </strong> {{$categorie->nom}}<br>
        <strong>Description : </strong> {{$categorie->description}}
    </p>
    <a href="{{route('categories.index')}}">Retourner à la liste</a>
</div>
