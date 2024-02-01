<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Mailcontroller;




class Mailcontroller extends Controller
{
    public function invioemail(Request $request){

        $dati = $request->all();

        if($dati['email']==''){

            Mail::to('indirizzo@example.com')->send(new email($dati['nome'],$dati['cognome'],$dati['indirizzo'],$dati['email'],$dati['commento'],));

            return  redirect()->back()->with('fallimento','IL MESSAGGIO NON È STATO INVIATO');
        }

        //return redirect()->route('home'); al posto di home posso mettere la pagina che deve visualizzare

        //return  redirect()->to('/'); questo commando ti fa andare alla pagina richiesta  inserendo manualmente tutto il percorso

        return  redirect()->back()->with('inviato','MESSAGGIO INVIATO CORETTAMENTE'); //questo commando fa tornare alla pagina precedente 


    }
}
