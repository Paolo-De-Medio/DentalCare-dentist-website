@props(['img','name','description'])

<div class="card">
    <div class="card-body">
      <img src="{{$img}}" alt="">
      <h5 class="card-title">{{$name}}</h5>
      <p class="card-text">{{$description}}</p>
    </div>
  </div>