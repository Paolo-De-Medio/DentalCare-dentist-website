<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($staff as $person)           
            <div class="col-12 col-md-4">
                <x-cardStaff
                img="{{$person['img']}}"
                name="{{$person['name']}}"
                description="{{$person['description']}}"
                />
            </div>
            @endforeach
        </div>
    </div>

    <hr>
    
    <div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h3 class="tc-main fw-bold">I NOSTRI PARTNER</h3>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-12 col-md-3 mb-3">
                <img src="/img/partner/elmex.png" class="img-fluid p-3" alt="">
            </div>
            <div class="col-12 col-md-3 mb-3">
                <img src="/img/partner/colgate.png" class="img-fluid p-3" alt="">
            </div>
            <div class="col-12 col-md-3 mb-3">
                <img src="/img/partner/oral b.png" class="img-fluid p-3" alt="">
            </div>
            <div class="col-12 col-md-3 mb-3">
                <img src="/img/partner/mentadent.png" class="img-fluid p-3" alt="">
            </div>
        </div>
    </div>
</x-layout>