<div>
    <h3>Details du commande N° {{$commande->id}}</h3>
    <p>
        <strong>Client : </strong> {{$commande->client->nom}}<br>
        <strong>Date : </strong> {{$commande->date}}<br>
        <strong>Montant : </strong> {{$commande->montant}}
    </p>
</div>
