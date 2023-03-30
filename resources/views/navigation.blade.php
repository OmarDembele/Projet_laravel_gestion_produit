<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
