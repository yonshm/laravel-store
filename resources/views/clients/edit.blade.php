<div>
    <h1>Edit le client ayat l'id N° {{$client->id}}</h1>
    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('clients.update', $client->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="Prenom">Prenom : </label>
            <input type="text" name="prenom" id="prenom" value="{{old('prenom',$client->prenom)}}">        
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" value="{{old('nom',$client->nom)}}">        
        </div>
        <div>
            <label for="telephone">Telephone : </label>
            <input type="tel" name="telephone" id="tel" value="{{old('telephone',$client->telephone)}}">        
        </div>
        <div>
            <label for="ville">ville : </label>
            <select name="ville" id="vilee">
                <option value="casablanca">Casablanca</option>
                <option value="agadir">Agadir</option>
                <option value="marakech">Marrakech</option>
                <option value="tanger">Tanger</option>
            </select>
        </div>
        <div>
            <label for="date_naissance">Date naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" value="{{old('date_naissance',$client->date_naissance)}}">
        </div>
        <input type="submit" class="">
    </form>
</div>
