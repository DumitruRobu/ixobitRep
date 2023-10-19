@extends("layouts.layout")

@section("title", "Add new clients Page")

@section("body")
    <div id="mainDivForAddingANewParam">
        <p>Lets add some new clients:</p>
        <form id="addParamForm" method="POST" action="{{route('StoreNewClient')}}">
            @csrf
            <input type="text" name="nume" placeholder="client's name...">
            @error("nume")
            <p>*{{ $message }}</p>
            @enderror

            <input type="text" name="prenume" placeholder="client's surname...">
            @error("prenume")
            <p>*{{ $message }}</p>
            @enderror

            <button type="submit">Add a new client</button>
        </form>
        <a href="/">&larr;Back</a>
    </div>

@endsection
