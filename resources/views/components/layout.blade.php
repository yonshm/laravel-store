<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body class="container">
    <nav class="nav">
        <a href="/" class="nav-link">Home</a>
        <a href="/categories" class="nav-link">Categories</a>
        <a href="/clients" class="nav-link">Clients</a>
        <a href="/produits" class="nav-link">Produits</a>
        <a href="/commandes" class="nav-link">Commandes</a>
        
    </nav>
    <section >
        {{ $slot }}
    </section>
        <script>
            function deleteItem (e) {
                const url = window.location.href;
                const fullUri = url.split("/");
                const uri = fullUri[fullUri.length - 1];
                if (e.target.classList.contains('delete-btn')) {
                    const itemId = e.target.parentElement.parentElement;
                    
                    if (confirm('Are you sure you want to delete this item?')) {
                        fetch(`/${uri}/${itemId.id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Content-Type': 'application/json',
                            },
                        })
                        itemId.remove();
                    }
                }
            
        };
        document.addEventListener('click', deleteItem)



        // const selectStatus = document.getElementById("commande_status");
        // selectStatus.addEventListener('change', (e)=> {
                
                
        //     }) 
</script>
</body>
</html>