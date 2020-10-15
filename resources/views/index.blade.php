@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success text-center" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">descrizione</th>
                <th scope="col">disponibilita</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $prodotto)
                <tr>
                    <th scope="row">{{ $prodotto['id'] }}</th>
                    <td>{{ $prodotto['Nome'] }}</td>
                    <td>{{ $prodotto['tipo'] }}</td>
                    <td>{{ $prodotto['descrizione'] }}</td>
                    <td>{{ $prodotto['disponibilita'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
