<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/style.css">
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



<div class="service_detail content">
    <div class="service_detail_description">
    <h1>{{$service['name']}}</h1>

    <p>{{$service['description']}}</p>
    </div>
<div class="service_detail_img">
    <img src="https://picsum.photos/300/200" alt="">
    <img src="https://picsum.photos/300/201" alt="">
    <img src="https://picsum.photos/300/202" alt="">
    <img src="https://picsum.photos/300/203" alt="">
    <img src="https://picsum.photos/300/204" alt="">
    <img src="https://picsum.photos/300/205" alt="">
</div>

</div>






<!-- fontoweson -->
<script src="https://kit.fontawesome.com/2b8422c872.js" crossorigin="anonymous"></script>

</body>
</html>