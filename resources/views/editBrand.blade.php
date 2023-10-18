@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <div id="mainDivForAddingANewParam">
        <p>Lets edit your brand!</p>
        <form id="addParamForm" method="POST" action="{{route('UpdateBrand', ['id' =>$brandToEdit['id']])}}">
            @csrf
            <input name="name" type="text" placeholder="Brand name..." value="{{$brandToEdit['name']}}">
            @error("name")
            <p>*{{ $message }}</p>
            @enderror
            <button type="submit">Edit</button>

        </form>
        <a href="{{ route('ViewAllBrands') }}">&larr; Back</a>
    </div>
@endsection
