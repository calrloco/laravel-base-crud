@extends('layouts.app')
@section('content')
    
    <table class="table bg-light">

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
            {{-- /*visualizzo proditti*/ --}}
        
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->tipo }}</td>
                    <td>{{ $product->descrizione }}</td>
                    <td>{{ $product->disponibile }}</td>
                    <td></td>
                </tr>
        
        </tbody>
    </table>

@endsection
