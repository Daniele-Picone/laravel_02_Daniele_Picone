<x-layout>
    
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

 <div class="homepage_content">

   <div class="description">
    <h2> "SONO UN MAITRE DI SALA" </h2>
   
    <div class="skills">
    <span> <i class="fa-solid fa-wine-glass"></i>  Sommelier</span>
    <span> <i class="fa-solid fa-map-pin"></i>  Made in Sud </span>
    <span><i class="fa-solid fa-desktop"></i>  Aspirante Web Developer</span>
    <span><i class="fa-solid fa-camera"></i>  Appasionato Fotografia</span>
    <span><i class="fa-solid fa-gamepad"></i>  Gamer</span>
    </div>
  
   </div>
  
   <div class="img"> 
    <img src="/io.jpg" alt="">
      </div>
    </div>

   
  
</div>










</x-layout>