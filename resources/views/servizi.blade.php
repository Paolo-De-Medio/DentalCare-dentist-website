<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($trattamenti as $trattamento)           
            <div class="col-12 col-md-4">
                <x-card
                icon="{{$trattamento['icon']}}"
                title="{{$trattamento['title']}}"
                description="{{$trattamento['description']}}"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>