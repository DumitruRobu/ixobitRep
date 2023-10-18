@extends("layouts.layout")

@section("title", "Main Page")

@section("body")

        @foreach($allProdus as $produs)
            <div id="allProducts"><a href="{{route('ViewProdus', ["id" =>$produs['id']])}}">
                <img src="{{$produs['image']}}" id="imaginePreview">
                @if($produs->brand)
                    <p>{{$produs->brand->name}}</p>
                @else
                    <p>No Brand Available</p>
                @endif
                <p>{{$produs['price']}}</p>
                </a>
            </div>
        @endforeach

    <a href="/">&larr;Back</a>
@endsection

