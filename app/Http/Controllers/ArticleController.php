<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function articles(){
        $articles = [

            ['name'=> 'La notte Delle stelle' , 'article'=>'Oggi è il giorno della nuova guida Michelin Chi prenderà o poerderà la stella ?'],
            ['name' => 'Chi sono gli Ispettori Michelin' , 'article'=> 'Mai nessuno è riuscito a riconoscere un ispettore 
            michelin si nascondo come tipici clienti ']
         

        ];

        return view('articles', ['articles'=>$articles]);
    }

    function articleDetail($name){
        $articles = [

            ['name'=> 'La notte Delle stelle' , 'article'=>'Oggi è il giorno della nuova guida Michelin Chi prenderà o poerderà la stella ?'],
            ['name' => 'Chi sono gli Ispettori Michelin' , 'article'=> 'Mai nessuno è riuscito a riconoscere un ispettore 
            michelin si nascondo come tipici clienti ']
         

        ];


        foreach($articles as $article){
            if($name == $article['name']);
            return view('article.articleDetail',['article'=> $article  ]);
        }





    }
}
