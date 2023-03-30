<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/front-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css">
</head>
<body>
    @include('navigation')
    <div class="container w-25 mt-2 pb-5 mb-5">
        <div class="shadow-sm ">
            <div class="card-body bg-black">
                <h1 class="titre"> Formulaire d'ajout de produit </h1>
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nom" 
                            placeholder="Add a new product" aria-label="Add a new todo" aria-describedby="button-addon2">
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="prix" 
                            placeholder="Add a new price" aria-label="Add a new todo" aria-describedby="button-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="description" class="form-control" id="" cols="30" rows="50" style="height:100px"  
                            placeholder="Add a new description"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-info" type="submit" id="button-addon2">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>