@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <div id="mainDivForAddingANewParam">
        <p>Lets edit your client!</p>
        <form id="addParamForm" method="POST" action="{{route('UpdateClient', ['id' =>$clientToEdit['id']])}}">
            @csrf
            <input name="nume" type="text" placeholder="Client's name..." value="{{$clientToEdit['nume']}}">
            @error("nume")
            <p>*{{ $message }}</p>
            @enderror

            <input name="prenume" type="text" placeholder="Client's surname..." value="{{$clientToEdit['prenume']}}">
            @error("prenume")
            <p>*{{ $message }}</p>
            @enderror
            <button type="submit">Edit</button>

        </form>
        <a href="{{ route('ViewAllClients') }}">&larr; Back</a>
    </div>
@endsection
