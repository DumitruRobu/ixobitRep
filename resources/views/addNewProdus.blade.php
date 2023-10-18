@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <div id="mainDivForAddingANewParam">
        <p>Lets add some new products:</p>
        <form id="addParamForm" method="POST" action="{{route('StoreNewProdus')}}">
            @csrf
            <input type="text" name="barcode" placeholder="barcode...">
            @error("barcode")
            <p>*{{ $message }}</p>
            @enderror

            <label for="Brand">Choose the brand: </label>
            <select name="idBrand" id="Brand">
                @foreach($toateBrandurile as $brand)
                    <option value="{{$brand['id']}}">{{$brand['name']}}</option>
                @endforeach
            </select>

            <input type="text" name="name" placeholder="name...">
            @error("name")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="price" placeholder="price...">
            @error("price")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="image" placeholder="image URL...">
            @error("image")
            <p>*{{ $message }}</p>
            @enderror

            <label for="Params">Choose the parameters: </label>
            <select name="id_params" id="Params">
                @foreach($totiParametrii as $parametru)
                    <option value="{{$parametru['id']}}">{{$parametru['memory'] . ", " . $parametru['display'] . ", " .  $parametru['ram'] . ", " .  $parametru['battery'] . ", " .  $parametru['model'] . ", " . $parametru["sim"] . ", " . $parametru["refreshRate"] . ", " . $parametru["color"] . ", " . $parametru["processor"]}}</option>
                @endforeach
            </select>
            @error("id_params")
            <p>*{{ $message }}</p>
            @enderror

            <button type="submit">Add product</button>
        </form>
        <a href="/">&larr;Back</a>
    </div>

@endsection
