@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <p>All your brands are:</p>

    <table class="styled-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allBrands as $brand)
            <tr>
                <td>{{$brand['name']}}</td>
                <td><a href="{{ route('EditBrand', ['id' => $brand['id']]) }}">Edit <i class="fa-solid fa-pen"></i></a></td>
                <form action="{{ route('DeleteBrand', ['id' => $brand['id']]) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <td><button type="submit" id="deleteButton">Delete <i class="fa-solid fa-trash"></i></button></td>
                </form>

            </tr>
        @endforeach
        </tbody>

    </table>
    <a href="/">&larr;Back</a>
@endsection

