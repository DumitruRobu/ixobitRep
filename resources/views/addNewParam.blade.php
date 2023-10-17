@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <div id="mainDivForAddingANewParam">
        <p>Lets add some new params:</p>
        <form id="addParamForm" method="POST" action="{{route('StoreNewParam')}}">
            @csrf
            <input type="text" name="memory" placeholder="memory capacity...">
            @error("memory")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="display" placeholder="display...">
            @error("display")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="ram" placeholder="ram">
            @error("ram")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="battery" placeholder="battery...">
            @error("battery")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="model" placeholder="model...">
            @error("model")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="sim" placeholder="sim...">
            @error("sim")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="refreshRate" placeholder="refresh rate...">
            @error("refreshRate")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="color" placeholder="color...">
            @error("color")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="processor" placeholder="processor...">
            @error("processor")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="connection" placeholder="connection...">
            @error("connection")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="displayType" placeholder="display type...">
            @error("displayType")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="nfc" placeholder="nfc...">
            @error("nfc")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="processorModel" placeholder="processor model...">
            @error("processorModel")
            <p>*{{ $message }}</p>
            @enderror

            <label for="isRecommended">Is it recommended?</label>
            <select name="isRecommended" id="isRecommended">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
            @error("isRecommended")
            <p>*{{ $message }}</p>
            @enderror

            <button type="submit">Add param</button>
        </form>
        <a href="/">&larr;Back</a>
    </div>

@endsection
