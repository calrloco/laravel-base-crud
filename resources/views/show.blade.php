@extends('layouts.app')
@section('content')
<a href="{{ route('products.index') }}" class="btn btn-primary mb-5">Back</a>
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
