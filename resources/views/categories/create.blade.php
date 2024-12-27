<div>
    <h1>Ajouter un nouvelle categorie :</h1>
    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom : </label><br>
            <input type="text" name="nom">
        </div>
        <div>
            <label for="description">description : </label><br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Ajouter">
    </form>
</div>
