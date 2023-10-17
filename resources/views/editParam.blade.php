@extends("layouts.layout")

@section("title", "Main Page")

@section("body")

    <div id="mainDivForAddingANewParam">
        <p>Lets edit your existent params:</p>
        <form id="addParamForm" method="POST" action="{{route('UpdateParam', ['id' =>$paramToEdit['id']])}}">

            @csrf
            <input type="text" name="memory" placeholder="memory capacity..." value={{$paramToEdit['memory']}} >
            @error("memory")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="display" placeholder="display..." value={{$paramToEdit['display']}}>
            @error("display")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="ram" placeholder="ram" value={{$paramToEdit['ram']}}>
            @error("ram")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="battery" placeholder="battery..." value={{$paramToEdit['battery']}}>
            @error("battery")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="model" placeholder="model..." value={{$paramToEdit['model']}}>
            @error("model")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="sim" placeholder="sim..." value={{$paramToEdit['sim']}}>
            @error("sim")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="refreshRate" placeholder="refresh rate..." value={{$paramToEdit['refreshRate']}}>
            @error("refreshRate")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="color" placeholder="color..." value={{$paramToEdit['color']}}>
            @error("color")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="processor" placeholder="processor..." value={{$paramToEdit['processor']}}>
            @error("processor")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="connection" placeholder="connection..." value={{$paramToEdit['connection']}}>
            @error("connection")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="displayType" placeholder="display type..." value={{$paramToEdit['displayType']}}>
            @error("displayType")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="nfc" placeholder="nfc..." value={{$paramToEdit['nfc']}}>
            @error("nfc")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="processorModel" placeholder="processor model..." value={{$paramToEdit['processorModel']}}>
            @error("processorModel")
            <p>*{{ $message }}</p>
            @enderror

            <label for="isRecommended">Is it recommended?</label>
            <select name="isRecommended" id="isRecommended">
                <option {{$paramToEdit['isRecommended'] == 0 ? "selected" : ""}} value="0">No</option>
                <option {{$paramToEdit['isRecommended'] == 1 ? "selected" : ""}} value="1">Yes</option>
            </select>
            @error("isRecommended")
            <p>*{{ $message }}</p>
            @enderror

            <button type="submit">Edit param</button>
        </form>
        <a href="/">&larr;Back</a>
    </div>
@endsection
