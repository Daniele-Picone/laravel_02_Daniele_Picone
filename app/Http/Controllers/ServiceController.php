<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ServiceController extends Controller {

 function service (){
     $services = [
       ['name'=> 'Caterig' , 'description'=> 'Lasciamo la scelta ai nostri ospiti di scegliere la location al resto pensiamo noi' ],
     
       ['name'=> 'Noleggio attrezzature' , 'description' => 'Mettiamo a disposizione dei nostri clienti la miglior attrezzatura per gli eventi'],
     
       ['name'=> 'Gestione del personale ', 'description'=> 'Mettiamo a disposioni per i nostri clienti anche una squadra di professionisti , Dalla cucina alla Sala '],
     ];



   return view('service', ['services' => $services]);

    }

    function dettaglio($name){

      $services = [
        ['name'=> 'Caterig' , 'description'=> 'Lasciamo la scelta ai nostri ospiti di scegliere la location al resto pensiamo noi' ],
      
        ['name'=> 'Noleggio attrezzature' , 'description' => 'Mettiamo a disposizione dei nostri clienti la miglior attrezzatura per gli eventi'],
      
        ['name'=> 'Gestione del personale ', 'description'=> 'Mettiamo a disposioni per i nostri clienti anche una squadra di professionisti , Dalla cucina alla Sala '],
      ];

      foreach($services as $service){
        
        if($name == $service['name']){

          return view('service.serviceDetail', [ 'service' => $service]);
        }

      }

    }
}
