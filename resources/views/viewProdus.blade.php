@extends("layouts.layout")

@section("title", "Main Page")

@section("body")

            <div id="allProducts">
                <p>Product Details: </p>
                <img src="{{$produs['image']}}" id="imaginePreview">
                <p>Barcode: {{$produs['barcode']}}</p>
                @if($produs->brand)
                    <p>Brand: {{$produs->brand->name}}</p>
                @else
                    <p>No Brand Available</p>
                @endif
                <p>Price: {{$produs['price']}} MDL</p>
                <p>Company Name: {{$produs['name']}}</p>
                <p><b>Parameters:</b></p>
                <ul>
                    <li>Memory: {{$produs->params->memory}}</li>
                    <li>Display: {{$produs->params->display}}</li>
                    <li>RAM: {{$produs->params->ram}}</li>
                    <li>Battery: {{$produs->params->battery}}</li>
                    <li>Model: {{$produs->params->model}}</li>
                    <li>SIM: {{$produs->params->sim}}</li>
                    <li>Refresh Rate: {{$produs->params->refreshRate}}</li>
                    <li>Color: {{$produs->params->color}}</li>
                    <li>Processor: {{$produs->params->processor}}</li>
                    <li>Display Type: {{$produs->params->displayType}}</li>
                    <li>NFC: {{$produs->params->nfc}}</li>
                    <li>Processor Model: {{$produs->params->processorModel}}</li>
                    <li>Is Recommended: {{($produs->params->isRecommended) ? "Yes" : "No"}}</li>
                </ul>

            </div>
            <a href="{{ route('ViewAllProdus') }}">&larr; Back</a>
@endsection

