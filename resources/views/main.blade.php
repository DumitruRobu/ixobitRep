@extends("layouts.layout")

@section("title", "Main Page")

@section("body")
    <p>Welcome, please, choose one of the available options:</p>
    <p><a href="{{route('AddNewBrand')}}"> Adauga brand </a></p>
    <p><a href="{{route('ViewAllBrands')}}"> Vezi toate brandurile </a></p>
    <p><br></p>
    <p><a href="{{route('AddNewParam')}}"> Adauga parametri </a></p>
    <p><a href="{{route('ViewAllParams')}}"> Vezi toti parametrii </a></p>
    <p><br></p>
    <p><a href="{{route('AddNewProdus')}}"> Adauga product </a></p>
    <p><a href="{{route('ViewAllProdus')}}"> Vezi toate produsele </a></p>
    <p><br></p>
    <p><a href="{{route('AddNewClient')}}"> Adauga client </a></p>
    <p><a href="{{route('ViewAllClients')}}"> Vezi toti clientii </a></p>
    <p><br></p>
    <p><a href="{{route('ViewAllVinzari')}}"> Vezi toate vinzarile </a></p>
@endsection
