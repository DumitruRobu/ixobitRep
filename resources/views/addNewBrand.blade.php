@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <p>Lets add some new brands:</p>
    <form method="POST" action="{{route('StoreNewBrand')}}">
        @csrf
        <input type="text" name="name" placeholder="brand name...">

        @error("name")
        <p>*{{ $message }}</p>
        @enderror

        <button type="submit">Add a new brand</button>
    </form>
    <a href="/">&larr;Back</a>
@endsection
