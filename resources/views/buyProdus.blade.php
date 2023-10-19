@extends("layouts.layout")

@section("title", "Checkout Page")

@section("body")
            <p><b>CHECKOUT PAGE: </b></p>

            <div id="productDetails">
                <img src="{{$produs['image']}}" id="imaginePreview">
                <p>Barcode: {{$produs['barcode']}}</p>
                @if($produs->brand)
                    <p>Brand: {{$produs->brand->name}}</p>
                @else
                    <p>No Brand Available</p>
                @endif
                <p>Price: {{$produs['price']}} MDL</p>

                <form action="{{ route('StoreNewVinzare')}}" method="POST">
                    @csrf
                    <p>Choose the client who buys the product: </p>
                    <select name="id_client">
                        @foreach($clients as $client)
                            <option value="{{$client['id']}}">{{$client['nume'] . " " . $client['prenume']}}</option>
                        @endforeach
                    </select>

                    <div id="buyOrBack">
                        <a><button id="buy"> Buy </button></a>
                    </div>

                    <input type="hidden" name="data_cumpararii" value="{{ now() }}">
                    <input type="hidden" name="id_produs" value="{{ $produs['id'] }}">


                </form>
                <a href="{{ route('ViewAllProdus') }}"><button id="back">&larr; Back</button></a>
            </div>

@endsection

