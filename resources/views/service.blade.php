<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">
    <title>Il mio blog Personale</title>
</head>
<body>
    
<div class="container">

 <div class="sidebar">
 <h1>Il Mio Blog Personale</h1>
    <div class="profile">
    <img src="/profilo.jpg" alt="">
        <div class="person">
            <h2>Daniele Picone</h2>
        </div>
     
    </div>
    <div class="links">
        <ul>
            <li><a href="{{route('homepage')}}"> Homepage</a></li>
            <li><a href="{{route('aboutme')}}"> Chi Sono</a></li>
            <li><a href="{{route('services')}}"> Servizi</a></li>
            <li><a href="{{route('articles')}}"> Articoli</a></li>
        </ul>

    </div>

 </div>

 <div class="service_content">
     <h1>Servizi offerti</h1>
    <div class="service_wrapper">
      
    @foreach ($services as $service )
    <div class="service_card">
            <img src="https://picsum.photos/300/200" alt="">
            <div class="card_body">
                <h4>{{$service[ 'name']}}</h4>
                <p>{{$service['description']}}</p>
            </div>
                 <a href="{{route('service.detail',['name'=> $service['name']])}}"><button>Continua A leggere</button></a>
        </div>
    
    @endforeach
       
     
      
        
        
    </div>

 </div>



</div>

