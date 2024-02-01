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

<center><h2>EMAIL</h2></center>

<nav style="" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
      
          <a class="nav-link active" aria-current="page" href="{{route('articoli')}}">ARTICOLI</a>
          <a class="nav-link" href="{{route('contatti')}}">CONTATTI</a>
          <a class="nav-link" href="{{route('recensioni')}}">RECENSIONI</a>
          <a class="nav-link" href="">EMAIL</a>
          
          
          
        </div>
      </div>
    </div>
  </nav><br><br><br><br>

<center>

    <form style="width: 500px; height: 750px; border: solid; background-color: aqua;" 
    
           action="{{route('invio')}}" method="post">
           
           {{--Protezione contro gli haker evita l'errore 419 --}}
           @csrf

        <h3>INVIACI UN EMAIL PER FARCI SAPERE LA TUA OPINIONE</h3>
        <br>
    
        <!-- NOME -->
        <div>
            <p style=" font-size: larger;">NOME</p>
            <label for="nome" style="cursor: text; font-size: x-large; "></label>
            <input  type="text" name="nome" id="nome" placeholder="Inserisci il tuo nome">
        </div>
    
        <!-- COGNOME -->
        <div>
            <p style="padding-top: 10px; font-size: larger;">COGNOME</p>
            <label for="cognome" style="cursor: text; font-size: x-large;"></label>
            <input type="text" name="cognome" id="cognome" placeholder="Inserisci il tuo cognome">
        </div>
    
        <!-- INDIRIZZO -->
        <div>
            <p style="padding-top: 10px; font-size: larger;">INDIRIZZO</p>
            <label for="indirizzo" style="cursor: text; font-size: x-large;"></label>
            <input type="text" name="indirizzo" id="indirizzo" placeholder="Inserisci il tuo indirizzo">
        </div>
    
        <!-- EMAIL -->
        <div>
            <p style="padding-top: 10px; font-size: larger;">EMAIL</p>
            <label for="email" style="cursor: text; font-size: x-large;"></label>
            <input type="email" name="email" id="email" placeholder="Inserisci la tua email">
        </div>
    
        <!-- COMMENTO -->
        <div>
            <p style="padding-top: 10px; font-size: larger;">COMMENTO</p>
            <label for="commento" style="cursor: text; font-size: x-large;"></label>
            <textarea name="commento" id="commento" cols="30" rows="2" placeholder="Dici cosa ne pensi"></textarea>
        </div>
    
        <!-- INVIA -->
        <button type="submit" style="border: solid; background-color:#DCFFB7; width: 100px; height: 50px; font-size: larger; margin-top: 30px; margin-left: 250px;">INVIA</button>
    
        <!--COMMANDO VISIVO CHE L'EMAIL E STATA INVIATA CORETTAMENTE-->

        @if (session()->has('inviato'))

        <h3 style="background-color: green; color: blue; margin-top: 20px;">{{'session'('inviato')}}</h3>
            
        @endif

        <!--COMMANDO VISIVO CHE L'EMAIL E STATA INVIATA IN MODO SBAGLIATO-->

        @if (session()->has('fallimento'))

        <h3 style="background-color: red; color: blue; margin-top: 20px;">{{'session'('fallimento')}}</h3>
            
        @endif
    
    
    
      </form>

   
    

</center>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>