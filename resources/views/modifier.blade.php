<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify product</title>
    <style>
        
h1 {
    text-align: center;
 }
 
 ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow: hidden;
     background-color: #333;
 }
 
 li {
     float: left;
 }
 
 li a {
     display: block;
     color: white;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
 }
 
 li a:hover {
     background-color: #111;
 }
 
 .active {
     background-color: #04AA6D;
 }

.titre{
    color: aqua;
}


    </style>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/front-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css">
</head>
<body class="bg-info">
<div id="menu">
        <ul>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li><a href="{{ route('store1') }}">Ajouter des produits</a></li>
            <li><a href="{{ route('show') }}">liste des produits</a></li>
        </ul>
    </div>
    <div class="container w-25 mt-2 pb-5 mb-5">
        <div class="shadow-sm">
            <div class="card-body bg-black">
                <h1 class="titre"> Formulaire de modification des produits </h1>
                <form action="{{ route('update',$product->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nom" value="{{ $product->nom }}" placeholder="Add a new product" aria-label="Add a new todo" aria-describedby="button-addon2">
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="prix" value="{{ $product->prix }}" placeholder="Add a new price" aria-label="Add a new todo" aria-describedby="button-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="description" class="form-control" id="" cols="30" rows="50" style="height:100px"  placeholder="Add a new description">{{ $product->description }}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-info" type="submit" id="button-addon2">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>