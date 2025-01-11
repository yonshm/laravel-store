<x-layout>
<div>
    <h1>Liste des commandes</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>

            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>date</th>
                <th>Montant</th>
                <th>Action</th>
            </tr>
        </thead>
            
                @foreach($commandes as $commande)
                    <tr id="{{$commande->id}}">
                        <td>{{$commande->id}}</td>
                        <td>{{$commande->client->nom}} {{$commande->client->prenom}}</td>
                        <td>{{$commande->date}}</td>
                        <td>{{$commande->montant}}</td>
                        <td>
                            
                                <select class="form-select update-status" id="update-status" data-id="{{ $commande->id }}">
                                    <option value="En attente" {{ $commande->status == 'En attente' ? 'selected' : '' }}>En attente</option>
                                    <option value="En traitement" {{ $commande->status == 'En traitement' ? 'selected' : '' }}>En traitement</option>
                                    <option value="Expédiée" {{ $commande->status == 'Expédiée' ? 'selected' : '' }}>Expédiée</option>
                                    <option value="Livrée" {{ $commande->status == 'Livrée' ? 'selected' : '' }}>Livrée</option>
                                    <option value="Annulée" {{ $commande->status == 'Annulée' ? 'selected' : '' }}>Annulée</option>
                                </select>
                                
                            
                        </td>
                        <td><a href="{{route('commandes.show',$commande->id)}}">Details</a></td>
                        <td>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                @endforeach

            
        </tr>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('#update-status').on('change', function () {
            const status = $(this).val();
            const id = $(this).data('id');
            console.log(status)
            console.log(id)

            $.ajax({
                url: `/commandes/${id}/status`,
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function (response) {
                    // alert(response.success);
                },
                error: function (xhr, status, error) {
                    alert('Erreur: ' + xhr.responseJSON.error);
                }
            });
        });
    });



    const status = document.querySelectorAll("table tbody tr #update-status");
      status.forEach((element) => {
        element.addEventListener("change", () => {
          const selectOpt = element.options[element.selectedIndex].text;
          // console.log(element.value, selectOpt);
          Swal.fire({
            title: "vous êtes sur?",
            text: `${selectOpt}`,
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui ",
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                text: `Status : ${selectOpt}`,
                icon: "success",
              });
            //   element.parentElement.parentElement.remove();
            }
          });
        });
      });
</script>

</script>
</x-layout>

