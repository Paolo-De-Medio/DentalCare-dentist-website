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
</x-layout>