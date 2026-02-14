@if (!empty($contents))
    @foreach ($contents as $hero) 
    <div class="conteiner">
        <div class="row">
            <div class="col-lg-12 bg-success rounded p-5 text-center">
                <h3>{{$hero->title ?? 'Update Banner Title !'}} </h3>
                <h1>{{$hero->heading ?? 'Update Banner Heading !'}} </h1>
                <p>{{$hero->description ?? 'Update Banner Description !'}}</p>
            </div>
        </div>
    </div>
    @endforeach
@endif