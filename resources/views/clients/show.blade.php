<div>
    <h1>Details du client N° {{$client->id}}</h1>
    <p>
        <strong>Prenom : </strong> {{$client->prenom}}<br>
        <strong>Nom : </strong> {{$client->nom}}<br>
        <strong>ville : </strong> {{$client->ville}}<br>
        <strong>Date Naissance : </strong> {{$client->date_naissance}}<br>
        <strong>Nom : </strong> {{$client->nom}}<br>
    </p>
    <p><a href="{{route('clients.index')}}">Retournez a la liste</a></p>
</div>