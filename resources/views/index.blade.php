<x-layout>

    @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="/video/video1.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
          <div class="row d-flex h-100 text-center align-items-center">
            <div class="col-12 col-md-6 text-white text-start">
              <h1 class="display-3">Dental<span>Care</span></h1>
              <p class="lead mb-4">Gli specialisti del tuo sorriso</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero tempora cupiditate culpa itaque voluptates dignissimos corporis ducimus. Aliquam incidunt qui dolores.</p>
              <a href="#" class="button-header text-white">Maggiori Informazioni</a>
            </div>
          </div>
        </div>
      </header>
      
      {{-- INFO UTILI --}}
      <div class="container-fluid bg-info">
        <div class="row px-5">

            <div class="col-12 col-md-4 my-5">
                    <i class="fas fa-hospital-alt text-white fs-2 mb-3"></i>
                    <h5 class="text-white">EMERGENCY SERVICE</h5>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa placeat quia sit laudantium doloribus facere error exercitationem, sed numquam nostrum natus nemo nisi!</p>
                    <a href="{{route('servizi')}}" class="button-custom">See More</a>
            </div>
            <div class="col-12 col-md-4 my-5">
                    <i class="far fa-calendar-check text-white fs-2 mb-3"></i>
                    <h5 class="text-white">PRENOTA UN APPUNTAMENTO</h5>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa placeat quia sit laudantium doloribus facere error exercitationem, sed numquam nostrum natus nemo nisi!</p>
                    <a href="" class="button-custom mt-3">Book Now</a>
            </div>
            <div class="col-12 col-md-4 my-5">
                <i class="far fa-clock text-white fs-2 mb-3"></i>
                <h5 class="text-white">ORARI DI APERTURA</h5>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa placeat quia sit laudantium doloribus facere error exercitationem, sed numquam nostrum natus nemo nisi!</p>
                <a href="{{route('contatti')}}" class="button-custom mt-3">Contact Us</a>
            </div>

        </div>
      </div>

      {{-- ESPLORA IL NOSTRO STUDIO --}}
      <div class="container">
          <div class="row">
              <div class="col-12 text-center my-5">
                <h3>ESPLORA IL NOSTRO STUDIO</h3>
              </div>
          </div>

          <div class="row my-3 border-bottom">
              <div class="col-12 col-md-8 p-5">
                  <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil nulla fuga, beatae itaque harum id delectus quia esse iste, laboriosam modi vel quo nostrum tempore sint cupiditate dignissimos eos cum!</p>
              </div>
              <div class="col-12 col-md-4">
                  <img src="/img/studio1.jpeg" class="img-fluid rounded-pill mb-3" alt="">
            </div>
          </div>

          <div class="row my-3 border-bottom">
            <div class="col-12 col-md-4">
                <img src="/img/studio2.jpeg" class="img-fluid rounded-pill mb-3" alt="">
            </div>
            <div class="col-12 col-md-8 p-5">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consectetur, laborum voluptatem necessitatibus quisquam voluptate eligendi neque architecto provident veritatis deserunt. Similique voluptatum illo culpa animi nemo ducimus saepe. Soluta.</p>
          </div>
        </div>

        <div class="row my-3 border-bottom">
            <div class="col-12 col-md-8 p-5">
                <h4>Lorem Ipsum</h4>

              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil nulla fuga, beatae itaque harum id delectus quia esse iste, laboriosam modi vel quo nostrum tempore sint cupiditate dignissimos eos cum!</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="/img/studio3.jpeg" class="img-fluid rounded-pill mb-3" alt="">
          </div>
        </div>

        <div class="row my-3 border-bottom">
            <div class="col-12 col-md-4">
                <img src="/img/studio4.jpeg" class="img-fluid rounded-pill mb-3" alt="">
            </div>
            <div class="col-12 col-md-8 p-5">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consectetur, laborum voluptatem necessitatibus quisquam voluptate eligendi neque architecto provident veritatis deserunt. Similique voluptatum illo culpa animi nemo ducimus saepe. Soluta.</p>
          </div>
        </div>
      </div>

      
</x-layout>