@props(['icon','title','description'])

<div class="card">
    <div class="card-body">
      <p class="card-text">{{$icon}}</p>
      <h5 class="card-title">{{$title}}</h5>
      <p class="card-text">{{$description}}</p>
      @if(Route::currentRouteName()=='servizi')

        <a href="{{route('servizi.dettaglio',['title'=>$title])}}" class="btn btn-primary">Vai al dettaglio</a>
      
          
      @else

        <a href="{{route('servizi')}}" class="btn btn-primary">Torna ai trattamenti</a>

      @endif
    </div>
  </div>