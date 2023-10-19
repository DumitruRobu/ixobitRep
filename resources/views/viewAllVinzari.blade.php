@extends("layouts.layout")

@section("title", "Toate Vinzarile")

@section("body")
    <p>Toate vinzarile:</p>

    <table class="styled-table">
        <thead>
        <tr>
            <th>Client</th>
            <th>Produs ID</th>
            <th>Data Cumpararii</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allVinzari as $vinzare)
            <tr>
                <td>{{$vinzare->client->nume}} {{$vinzare->client->prenume}}</td>
                <td>{{$vinzare['id_produs']}}</td>
                <td>{{$vinzare['data_cumpararii']}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <a href="/">&larr;Back</a>
@endsection

