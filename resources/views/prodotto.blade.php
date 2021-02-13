@extends('layouts.app')
@section('title')
prodotto
@endsection
@section('main_content')
<h1 class="prod_title">{{ $prodotto['titolo'] }}</h1>
<img class="prod_img_header" src="{{ $prodotto['src-h'] }}" alt="">
<div class="prod_description_bar">
    <h3>Tipo di Pasta : {{ $prodotto['tipo'] }}</h3>
    <h3>Tempo di Cottura : {{ $prodotto['cottura'] }}</h3>
    <h3>Peso : {{ $prodotto['peso'] }}</h3>
</div>
<div class="prod_description">
    @foreach ($descrizione as $item)
    <p>{{ $item }}</p> 
    @endforeach
    
</div>
<img class="prod_img_footer" src="{{ $prodotto['src-p'] }}" alt="">
    
@endsection