<x-layout>
    <div class="container-fluid bg-main">
        <div class="row p-4">
            <div class="col-12 text-center text-white">
                <h2 class="fw-bold">I NOSTRI SERVIZI</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-6 p-5">
                <h4 class="tc-main fw-bold">DA SEMPRE CON VOI</h4>
                <p class="fw-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum maiores cumque nisi ipsum veritatis suscipit beatae? Sequi, ea soluta <span class="tc-main fw-bold">perspiciatis</span> nihil ullam architecto nesciunt dolores ad! Magnam suscipit quaerat repudiandae?</p>
                <br>
                <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque beatae atque <span class="tc-main fw-bold">rerum architecto</span> est repudiandae molestias maxime ullam quas consequatur, recusandae laudantium itaque ipsum dolore saepe nostrum perspiciatis fuga culpa.</p>
                <br>
                <p class="fw-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis dolore.</p>
            </div>
            @foreach ($trattamenti as $trattamento)           
            <div class="col-12 col-md-3">
                <x-card
                img="{{$trattamento['img']}}"
                title="{{$trattamento['title']}}"
                description="{{$trattamento['description']}}"
                />
            </div>
            @endforeach
            <div class="col-12 col-md-6 p-5">
                <h4 class="tc-main fw-bold">ACCOGLIAMO OGNI VOSTRA RICHIESTA</h4>
                <p class="fw-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum maiores cumque nisi ipsum veritatis suscipit beatae? Sequi, ea soluta perspiciatis nihil ullam architecto nesciunt dolores ad! Magnam suscipit quaerat repudiandae?</p>
                <br>
                <p class="fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum cum obcaecati enim dolorem quibusdam esse, perferendis eos quaerat, minus distinctio voluptates aliquam libero delectus necessitatibus aliquid expedita. <span class="tc-main fw-bold">Numquam, perferendis corporis.</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam eum earum cum est ea sunt laborum maxime vero dolor omnis odit cumque atque, fugit et quaerat ex iure non?</p>
            </div>
        </div>
    </div>
</x-layout>