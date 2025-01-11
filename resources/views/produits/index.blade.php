<x-layout>
<div>
    <h1>Liste des produits</h1>
    <a href="{{route('produits.create')}}">Ajouter un produits</a><br>
    <label for="categories">Categories : </label>
    <select name="categorie_id" id="categories">
        <option value="-1" selected>Tous</option>
        @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->nom}}</option>
        @endforeach
        
    </select>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom </th>
                <th>Prix</th>
                <th>Quantite </th>
                <th>Description </th>
                <th>Image</th>
                <th>Categorie</th>
                <th colspan="3">action </th>
            </tr>
        </thead>
        <tbody id="tbody-pro">
            @foreach($produits as $prd)
                <tr id="{{$prd->id}}">
                    <td>{{$prd->nom}}</td>
                    <td>{{$prd->prix}}</td>
                    <td>{{$prd->quantite}}</td>
                    <td>{{$prd->description}}</td>
                    <td><img src="{{asset('storage/'. $prd->image)}}" alt="" width="100px" height="100px"></td>
                    <td>{{$prd->categorie->nom}}</td>
                    <td><a href="{{route('produits.show',$prd->id)}}">DETAILS</a></td>
                    <td><a href="{{route('produits.edit', $prd->id)}}">MODIFIER</a></td>
                    <td><button class="delete-btn">Delete</button>
                        {{-- <form action="{{route('produits.destroy',$prd->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Supprimer">
                        </form> --}}
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    <div>
        {{-- {{ $produits->links() }} --}}
    </div>
</div>
<script>
            const selectCat = document.getElementById("categories");
            selectCat.addEventListener('change', (e)=> {
                filterByCategories()
                console.log(selectCat.value)
            }) 

            function filterByCategories () {
                const id = selectCat.value;
                //  
                window.location.href = '/produits/categorie/'+id;
                }
                    

                                    
 
                    // function createTr(data){
                    //     document.getElementById("tbody-pro").innerHTML = ``;
                    //     data.forEach(element => {
                    //         console.log(element)
                    //         document.getElementById("tbody-pro").innerHTML += `
                    //                 <tr id="${element.id}">
                    //                     <td>${element.nom}</td>
                    //                     <td>${element.prix}</td>
                    //                     <td>${element.quantite}</td>
                    //                     <td>${element.description}</td>
                    //                     <td>${element.categorie_id}</td>
                    //                     <td><a href="produits/show/${element.id}">DETAILS</a></td>
                    //                     <td><a href="produits/edit/${element.id}">MODIFIER</a></td>
                    //                     <td>
                    //                         <button class="delete-btn">Delete</button>
                    //                     </td>
                    //                 </tr>
                            
                    //         `;
                    //     });
                    // }
</script>
</x-layout>
