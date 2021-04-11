<x-layout>
    <div class="container-fluid">
        <div class="row p-4 bg-main">
            <div class="col-12 text-center text-white">
                <h2 class="fw-bold">{{$trattamento['title']}}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-3">
               <x-card
               img="{{$trattamento['img']}}"
               title="{{$trattamento['title']}}"
               description="{{$trattamento['description']}}"
               class="img-fluid"
               /> 
            </div>
            <div class="col-12 col-md-8 p-5">
                <h4 class="tc-main">MAGGIORI INFORMAZIONI SUL NOSTRO SERVIZIO</h4>
                <P class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit minus natus officia id aliquid atque sequi, tempora accusamus, eos quia ad itaque cupiditate ipsum alias officiis labore deleniti magnam amet?</P>
                <P class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quis, facere, quasi soluta alias ea quaerat neque enim nesciunt eum veritatis. Eos quam assumenda nulla distinctio dolore, facilis aspernatur quidem?</P>
                <br>
                <h4 class="tc-main">MODALITA DI PAGAMENTO</h4>
                <p class="fw-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus cumque assumenda illum itaque atque quisquam dignissimos? Quo temporibus ipsum iste, quibusdam ea atque magni eligendi necessitatibus libero dolore delectus dolorum?</p>
                <a href="{{route('contatti')}}" class="btn btn-success">Richiedi il servizio</a>
            </div>
        </div>
    </div>
</x-layout>