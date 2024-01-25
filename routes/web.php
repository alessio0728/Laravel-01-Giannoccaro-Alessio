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

    $articoli = [['titolo'=> 'Final tantasy 16','descrizione'=>'Gioco di ruolo','nome'=>'PS5'],
    ['titolo'=> 'Halo infinity','descrizione'=>'Gioco sparatutto','nome'=>'Xbox one X'],
    ['titolo'=> 'Fifa 2024','descrizione'=>'Gioco di sport','nome'=>'Nintendo swich'],
    ['titolo'=> 'Doom ','descrizione'=>'Gioco horror','nome'=>'Steam'],
];

    
return view('articoli',['articoli'=>$articoli,'titolo' => 'titolo effettivo']);
})->name("articoli");

//ROTTA ARTICOLO SINGOLO // ROTTA PARAMETRICA

Route::get('/articolo/{id}', function ($id) {

    $articoli = [['titolo'=> 'Final tantasy 16','descrizione'=>'Gioco di ruolo','nome'=>'PS5'],
    ['titolo'=> 'Halo infinity','descrizione'=>'Gioco sparatutto','nome'=>'Xbox one X'],
    ['titolo'=> 'Fifa 2024','descrizione'=>'Gioco di sport','nome'=>'Nintendo swich'],
    ['titolo'=> 'Doom ','descrizione'=>'Gioco horror','nome'=>'Steam'],
];
    return view('dettaglio',['articolo'=> $articoli[id]]);
})->name('articoli.dettaglio');

//ROTTA ARICOLO CONTATTI

Route::get('/contatti', function () {
    return view('contatti');
})->name("contatti");

//ROTTA IMMAGINE

Route::get('/recensioni', function () {
    return view('recensioni');
})->name("recensioni");


