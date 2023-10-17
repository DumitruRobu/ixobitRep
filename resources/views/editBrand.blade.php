@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <p>Lets edit your brand!</p>
    <form method="POST" action="{{route('UpdateBrand', ['id' =>$brandToEdit['id']])}}">
        @csrf
        <input name="name" type="text" placeholder="Brand name..." value={{$brandToEdit['name']}}>
        @error("name")
        <p>*{{ $message }}</p>
        @enderror
        <button type="submit">Edit</button>

    </form>
    <a href="/">&larr;Back</a>
@endsection
