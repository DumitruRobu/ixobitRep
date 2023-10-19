@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
        <div id="products">
            @foreach($allProdus as $produs)
                <div id="allProducts"><a href="{{route('ViewProdus', ["id" =>$produs['id']])}}">
                        <img src="{{$produs['image']}}" id="imaginePreview">
                        @if($produs->brand)
                            <p>{{$produs->brand->name}}, {{$produs->params->model}}</p>

                        @else
                            <p>No Brand Available</p>
                        @endif
                        <p>Pret: {{$produs['price']}} MDL</p>
                    </a>
                </div>
            @endforeach
        </div>


    <a href="/" id="backButton">&larr;Back</a>
@endsection

