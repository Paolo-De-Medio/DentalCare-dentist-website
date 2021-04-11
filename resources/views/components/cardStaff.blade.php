@props(['img','name','description'])

<div class="m-4">
    <div class="card-body text-center">
      <img src="{{$img}}" class="img-fluid" alt="">
      <h5 class="card-title tc-main fw-bold mt-3">{{$name}}</h5>
      <p class="card-text fw-light">{{$description}}</p>
    </div>
  </div>
