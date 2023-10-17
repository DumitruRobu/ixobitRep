@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <p>All your params are:</p>

    <table>
        <thead>
        <tr>
            <th>Memory</th>
            <th>Display</th>
            <th>Ram</th>
            <th>Battery</th>
            <th>Model</th>
            <th>Sim</th>
            <th>Refresh Rate</th>
            <th>Color</th>
            <th>Processor</th>
            <th>Connection</th>
            <th>Display Type</th>
            <th>NFC</th>
            <th>Processor Model</th>
            <th>Is recommended?</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allParams as $param)
            <tr>
                <td>{{$param['memory']}}</td>
                <td>{{$param['display']}}</td>
                <td>{{$param['ram']}}</td>
                <td>{{$param['battery']}}</td>
                <td>{{$param['model']}}</td>
                <td>{{$param['sim']}}</td>
                <td>{{$param['refreshRate']}}</td>
                <td>{{$param['color']}}</td>
                <td>{{$param['processor']}}</td>
                <td>{{$param['connection']}}</td>
                <td>{{$param['displayType']}}</td>
                <td>{{$param['nfc']}}</td>
                <td>{{$param['processorModel']}}</td>
                <td>{{$param['isRecommended']}}</td>

                <td><a href="{{ route('EditParam', ['id' => $param['id']]) }}">Edit</a></td>
                <form action="{{ route('DeleteParam', ['id' => $param['id']]) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <td><button type="submit">Delete</button></td>
                </form>

            </tr>
        @endforeach
        </tbody>

    </table>
    <a href="/">&larr;Back</a>
@endsection

