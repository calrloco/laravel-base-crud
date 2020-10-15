@extends('layouts.app')
@section('content')
<form  action="{{route('products.store')}}" method="POST">
    @csrf
    @method('post')
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" value="{{old('nome')}}" id="nome" name="nome" placeholder="Nome Prodotto">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" value="{{ old('tipo')}}" id="nome" name="tipo" placeholder="Tipo Prodotto">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Disponibilita</label>
      <select class="form-control" name="disponibilita">
        <option value="1">disponibile</option>
        <option value="0">non disponibile</option>
      </select>
    </div>
    <div class="form-group">
      <label for="descrizione">Example textarea</label>
    <textarea class="form-control" id="descrizione" name="descrizione" rows="3">{{old('descrizione')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" value="invia">Submit</button>
  </form>
@endsection