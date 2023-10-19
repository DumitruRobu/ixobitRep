@extends("layouts.layout")

@section("title", "All Clients' Page")

@section("body")
    <p>All your clients are:</p>

    <table class="styled-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allClients as $client)
            <tr>
                <td>{{$client['nume']}}</td>
                <td>{{$client['prenume']}}</td>
                <td><a href="{{ route('EditClient', ['id' => $client['id']]) }}">Edit <i class="fa-solid fa-pen"></i></a></td>
                <form action="{{ route('DeleteClient', ['id' => $client['id']]) }}" method="POST">
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

