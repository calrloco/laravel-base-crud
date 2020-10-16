@extends('layouts.app')
@section('content')

    @if ($message = Session::get('success'))
        {{-- /* se arriva il messaggio da product controller
        c'e un alert per indicare insemento andato a buon fine */ --}}
        <div class="alert alert-success text-center" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table bg-light">

        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">descrizione</th>
                <th scope="col">disponibilita</th>
                <th scope="col">Vedi Prodotto</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            {{-- /*visualizzo proditti*/ --}}
            @foreach ($data as $prodotto)
                <tr>
                    <th scope="row">{{ $prodotto->id }}</th>
                    <td>{{ $prodotto->nome }}</td>
                    <td>{{ $prodotto->tipo }}</td>
                    <td>{{ $prodotto->descrizione }}</td>
                    <td>{{ $prodotto->disponibile }}</td>
                    <td><a href="{{ route('products.show', $prodotto->id) }}" class="btn btn-info">Info</a></td>
                    <td><a href="{{ route('products.edit', $prodotto->id) }}" class="btn btn-success">Modifica</a></td>
                    <td>
                        <form action="{{ route('products.destroy', $prodotto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="btn btn-danger">Elimina</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
