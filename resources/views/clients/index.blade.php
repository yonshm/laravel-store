<x-layout>
    <h3>Liste des clients</h3>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>telephone</th>
                <th>ville</th>
                <th>date naissance</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $clt)
            <tr id="{{$clt->id}}">
                <td>{{$clt->id}}</td>
                <td>{{$clt->prenom}}</td>
                <td>{{$clt->nom}}</td>
                <td>{{$clt->telephone}}</td>
                <td>{{$clt->ville}}</td>
                <td>{{$clt->date_naissance}}</td>
                <td>
                    <button><a href="{{route('clients.show', $clt->id)}}">Details</a></button>
                </td>
                <td>
                    <a href="{{route('clients.edit', $clt->id)}}">Modifier</a>
                </td>
                <td>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</x-layout>

