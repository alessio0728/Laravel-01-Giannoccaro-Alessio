<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel 01</title>
</head>
<body>

<center><h1> ESERCITAZIONE LARAVEL ALESSIO GIANNOCCARO</h1></center>

<center><h2>ARTICOLI</h2></center>



<x-navbar/>



<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($articoli as $chiave => $articolo)

  <div class="col">
  
    <div class="card">
      <img src="{{$articolo['immagine']}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$articolo['titolo']}}</h5>
        <p class="card-text"> {{$articolo['nome']}}</p>
        <p class="card-text"> {{$articolo['genere']}}</p>
        <a href="{{$articolo['descrizione']}}">Descrizione</a>
        <a href="{{route('articoli.dettaglio',['id'=>$chiave])}}">Dettaglio</a>
      </div>
    </div>
  </div>

  @endforeach
{{--
  <div class="col">
    <div class="card">
      <img src="https://upload.wikimedia.org/wikipedia/en/1/14/Halo_Infinite.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Halo infinity Xbox One</h5>
        <p class="card-text">Gioco sparatutto</p>
        <a href="https://it.wikipedia.org/wiki/Halo_Infinite">Descrizione</a>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card">
      <img src="https://m.media-amazon.com/images/I/71wol6NzJYL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fifa 2024 nintendo swich</h5>
        <p class="card-text">Gioco di sport</p>
        <a href="https://it.wikipedia.org/wiki/Coppa_Intercontinentale_FIFA_2024">Descrizione</a>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="https://images.g2a.com/360x600/1x1x1/doom-steam-key-global-i10000002155012/5912d667ae653a98cb5745ac" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">DOOM steam</h5>
        <p class="card-text"> Gioco horror </p>
        <a href="https://it.wikipedia.org/wiki/Doom">Descrizione</a>
      </div>
    </div>
    
  </div>
</div>
--}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
