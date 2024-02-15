<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 01</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <center><h1> ESERCITAZIONE LARAVEL ALESSIO GIANNOCCARO</h1></center>

<center><h2>DETTAGLIO</h2></center>



<x-navbar/><br>

<div class="row row-cols-1 row-cols-md-3 g-4 text-center">
    <div class="col mx-auto">
        <div class="card">
            <img src="{{$articolo['immagine']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$articolo['titolo']}}</h5>
                <p class="card-text">{{$articolo['nome']}}</p>
                <p class="card-text">{{$articolo['genere']}}</p>
                <a href="{{$articolo['descrizione']?? "#"}}">Descrizione</a>
            </div>
        </div>
    </div>
</div>

 
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

