<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter client</h1>
    @if ($errors->any())
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        <div>
            <label for="Prenom">Prenom : </label>
            <input type="text" name="prenom" id="prenom">        
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom">        
        </div>
        <div>
            <label for="telephone">Telephone : </label>
            <input type="tel" name="telephone" id="tel">        
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
            <input type="date" name="date_naissance" id="date_naissance">
        </div>
        <input type="submit" class="">
    </form>
</body>
</html>
