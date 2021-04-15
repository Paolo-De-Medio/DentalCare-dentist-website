<nav class="navbar navbar-expand-lg navbar-custom bg-custom sticky-top">
    <div class="container">
        <a class="navbar-brand link-custom" href="{{route('homepage')}}"><i class="fas fa-tooth me-1 tc-main"></i>Dental<span class="tc-main">Care</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link link-custom" aria-current="page" href="{{route('chiSiamo')}}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-custom" href="{{route('servizi')}}">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-custom" href="{{route('contatti')}}">Contattaci</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>