<div>
    <a href="{{route('categories.create')}}"> Ajouter une nouvelle categorie</a>
    <h1>Liste des categories</h1>
    
    <p>le nombre des categories est : {{count($categories)}}</p>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{route('categories.show', $item->id)}}">Details</a>

                    </td>
                    <td>
                        <a href="{{route('categories.edit', $item->id)}}">Modifier</a>
                    </td>
                    <td>
                        <form action="{{route('categories.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
