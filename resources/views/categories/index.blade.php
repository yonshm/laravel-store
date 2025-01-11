<x-layout>
<div>
    <a href="{{route('categories.create')}}"> Ajouter une nouvelle categorie</a>
    <h1>Liste des categories</h1>
    
    <p>le nombre des categories est : {{count($categories)}}</p>

    <table class="table table-striped table-bordered table-hover">
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
            <tr id="{{$item->id}}">              
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
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            
            @endforeach
            
        </tbody>
    </table>
</div>
</x-layout>