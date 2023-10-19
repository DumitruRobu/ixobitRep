@extends("layouts.layout")

@section("title", "Main Page")

@section("body")

    <div id="mainDivForAddingANewParam">
        <p>Lets edit your existent product: </p>
        <form id="addParamForm" method="POST" action="{{route('UpdateProdus', ['id' =>$produsToEdit['id']])}}">

            @csrf
            <input type="text" name="barcode" placeholder="barcode..." value="{{$produsToEdit['barcode']}}">
            @error("barcode")
            <p>*{{ $message }}</p>
            @enderror

            <label for="Brand">Choose the brand: </label>
            <select name="idBrand" id="Brand">
                @foreach($toateBrandurile as $brand)
                    <option {{$produsToEdit->brand->name == $brand->name ? "selected" : ""}} value="{{$brand['id']}}">{{$brand['name']}}</option>
                @endforeach
            </select>

            <input type="text" name="name" placeholder="name..." value="{{$produsToEdit['name']}}">
            @error("name")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="price" placeholder="price..." value="{{$produsToEdit['price']}}">
            @error("price")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="image" placeholder="image..." value="{{$produsToEdit['image']}}">
            @error("image")
            <p>*{{ $message }}</p>
            @enderror

            <label for="Params">Choose the parameters: </label>
            <select name="id_params" id="Params">
                @foreach($params as $param)
                    <option {{$produsToEdit->params->id == $param->id ? "selected" : ""}} value="{{$param['id']}}">{{$param['memory'] . ", " . $param['display'] . ", " .  $param['ram'] . ", " .  $param['battery'] . ", " .  $param['model'] . ", " . $param["sim"] . ", " . $param["refreshRate"] . ", " . $param["color"] . ", " . $param["processor"]}}</option>
                @endforeach
            </select>
            @error("id_params")
            <p>*{{ $message }}</p>
            @enderror

            <button type="submit">Edit product</button>
        </form>
        <a href="/">&larr;Back</a>
    </div>
@endsection
