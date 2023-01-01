<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $services = [

        [
            'title'=>'Web Developer',
            'img'=>'/img/webdeveloper.jfif',
            'description'=>'Esperti Ti Accompagneranno Nella Creazione Di Un Sito Web Personalizzato. Contattaci Per Maggiori Informazioni O  Richiedere Un Preventivo Di Spesa.',
            'type'=>'web',
            'id'=>'1',
        ],
        [
            'title'=>'Cyber Security Engineer',
            'img'=>'/img/cybersec.jfif',
            'description'=>'Una delle attività principale di un Cyber Security Engineer consiste nella progettazione e nelle implementazione delle soluzioni - o software di sicurezza - per la protezione dei dati e delle informazioni custoditi.',
            'type'=>'sicurezza',
            'id'=>'2',
        ],
        [
            'title'=>'IT Consultant',
            'img'=>'/img/itconsulent.jfif',
            'description'=>'aiutiamo le imprese a scegliere la soluzione IT più adatta tra le migliaia esistenti, per soddisfare un bisogno specifico o realizzare un obiettivo.',
            'type'=>'hardware',
            'id'=>'3',
        ],

    ];


    public function home() {
        return view('welcome' , ['services' => $this->services]);
    }


    public function serviceByType($type){

        $serviziByType = [];

        foreach($this->services as $service){

            if($service['type'] == $type )

            array_push($serviziByType, $service);
        }

        return view('serviceByType',
        [
           "services"=>$serviziByType,
           "type"=>$type
        ]);
    }


    public function serviceById($id){

        foreach($this->services as $service){

            if($service['id'] == $id)

            return view('serviceById', 
            [
                "service"=>$service,
            ]);

            
        }
        abort(404);
    }

    public function contacts(){

        return view('contacts');
    }
}
