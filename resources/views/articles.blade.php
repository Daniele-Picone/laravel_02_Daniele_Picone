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

 <div class="articles_content">
 <h1> Articoli </h1>
    <div class="service_wrapper">
      
    @foreach ($articles as $article)
    <div class="service_card">
            <img src="https://picsum.photos/300/200" alt="">
            <div class="card_body">
                <h4>{{$article[ 'name']}}</h4>
                <p>{{$article['article']}}</p>
            </div>
                 <a href="{{route('articles.detail',['name'=> $article['name']])}}"><button>Continua A leggere</button></a>
        </div>
    
    @endforeach
      
        
        
    </div>

 </div>


 </div>



</div>

</x-layout>