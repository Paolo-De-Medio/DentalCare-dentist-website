@props(['img','title','description'])

<div class="card-advice m-2 my-4">
    <div class="card-body text-center p-3 my-3">
      <img src="{{$img}}" alt="" class="img-fluid">
      <h5 class="card-title tc-main mt-3">{{$title}}</h5>
      <p class="card-text fw-light my-4">{{$description}}</p>
      @if(Route::currentRouteName()=='servizi')

        <a href="{{route('servizi.dettaglio',['title'=>$title])}}" class="btn-custom">Vai al dettaglio</a>
      
          
      @else

        <a href="{{route('servizi')}}" class="btn-custom">Torna ai trattamenti</a>

      @endif
    </div>
  </div>