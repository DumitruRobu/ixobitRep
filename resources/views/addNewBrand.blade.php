@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <div id="mainDivForAddingANewParam">
        <p>Lets add some new brands:</p>
        <form id="addParamForm" method="POST" action="{{route('StoreNewBrand')}}">
            @csrf
            <input type="text" name="name" placeholder="brand name...">

            @error("name")
            <p>*{{ $message }}</p>
            @enderror

            <button type="submit">Add a new brand</button>
        </form>
        <a href="/">&larr;Back</a>
    </div>

@endsection
