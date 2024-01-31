<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ROTTA HOME

Route::get('/', function () {
    return view('homepage');
})->name("home");


//ROTTA ARTICOLI

Route::get('/articoli', function () {

    $articoli = [['titolo'=> 'Final tantasy 16','genere'=>'Gioco di ruolo','nome'=>'PS5','immagine'=>"https://prod-printler-front-as.azurewebsites.net/media/photo/143901.jpg?mode=crop&width=727&height=1024&rnd=0.0.1","descrizione"=>"https://it.wikipedia.org/wiki/Final_Fantasy_XVI"],
    ['titolo'=> 'Halo infinity','genere'=>'Gioco sparatutto','nome'=>'Xbox one X','immagine'=>"https://upload.wikimedia.org/wikipedia/en/1/14/Halo_Infinite.png",'descrizione'=>"https://it.wikipedia.org/wiki/Halo_Infinite"],
    ['titolo'=> 'Fifa 2024','genere'=>'Gioco di sport','nome'=>'Nintendo swich','immagine'=>"https://m.media-amazon.com/images/I/71wol6NzJYL._AC_UF1000,1000_QL80_.jpg",'descrizione'=>"https://it.wikipedia.org/wiki/Coppa_Intercontinentale_FIFA_2024"],
    ['titolo'=> 'Doom ','genere'=>'Gioco horror','nome'=>'Steam','immagine'=>"https://images.g2a.com/360x600/1x1x1/doom-steam-key-global-i10000002155012/5912d667ae653a98cb5745ac",'descrizione'=>"https://it.wikipedia.org/wiki/Doom"],
];

    
return view('articoli',['articoli'=>$articoli,'titolo' => 'titolo effettivo']);
})->name("articoli");

//ROTTA ARTICOLO SINGOLO // ROTTA PARAMETRICA

Route::get('/articoli/{id}', function ($id) {

    $articoli = [['titolo'=> 'Final tantasy 16','genere'=>'Gioco di ruolo','nome'=>'PS5','immagine'=>"https://prod-printler-front-as.azurewebsites.net/media/photo/143901.jpg?mode=crop&width=727&height=1024&rnd=0.0.1",'descrizione'=>"https://it.wikipedia.org/wiki/Final_Fantasy_XVI"],
    ['titolo'=> 'Halo infinity','genere'=>'Gioco sparatutto','nome'=>'Xbox one X','immagine'=>"https://upload.wikimedia.org/wikipedia/en/1/14/Halo_Infinite.png",'descrizione'=>"https://it.wikipedia.org/wiki/Halo_Infinite"],
    ['titolo'=> 'Fifa 2024','genere'=>'Gioco di sport','nome'=>'Nintendo swich','immagine'=>"https://m.media-amazon.com/images/I/71wol6NzJYL._AC_UF1000,1000_QL80_.jpg",'descrizione'=>"https://it.wikipedia.org/wiki/Coppa_Intercontinentale_FIFA_2024"],
    ['titolo'=> 'Doom ','genere'=>'Gioco horror','nome'=>'Steam','immagine'=>"https://images.g2a.com/360x600/1x1x1/doom-steam-key-global-i10000002155012/5912d667ae653a98cb5745ac",'descrizione'=>"https://it.wikipedia.org/wiki/Doom"],
];
    return view('dettaglio',['articolo'=> $articoli[$id]]);
})->name('articoli.dettaglio');

//ROTTA ARICOLO CONTATTI

Route::get('/contatti', function () {
    return view('contatti');
})->name("contatti");

//ROTTA RECENSIONI

Route::get('/recensioni', function () {
    return view('recensioni');
})->name("recensioni");


//ROTTA EMAIL

Route::get('/email', function () {
    return view('email');
})->name("email");




