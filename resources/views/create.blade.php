@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger text-center">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ !empty($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
        @csrf
        @if (!empty($product))
            @method('PATCH')
            <input type="hidden" value="{{ $product->id }}" name="id">
        @else
            @method('POST')
        @endif

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="{{ !empty($product) ? $product->nome : old('nome') }}" id="nome"
                name="nome" placeholder="Nome Prodotto">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" value="{{ !empty($product) ? $product->tipo : old('tipo') }}" id="nome"
                name="tipo" placeholder="Tipo Prodotto">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Disponibilita</label>
            <select class="form-control" name="disponibile">
                <option value="1">disponibile</option>
                <option value="0">non disponibile</option>
            </select>
        </div>
        <div class="form-group">
            <label for="descrizione">Example textarea</label>
            <textarea class="form-control" id="descrizione" name="descrizione"
                rows="3">{{ !empty($product) ? $product->descrizione : old('descrizione') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" value="invia">Submit</button>
    </form>
@endsection
