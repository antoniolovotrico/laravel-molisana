@extends('layouts.app')
@section('title')
prodotto
@endsection
@section('main_content')
<h1 class="prod_title">{{ $prodotto['titolo'] }}</h1>
<img class="prod_img_header" src="{{ $prodotto['src-h'] }}" alt="">
<div class="prod_description_bar">
    <div>
        <h3>Tipo di Pasta :</h3>
        <h3>{{ $prodotto['tipo'] }}</h3>
    </div>
    <div>
        <h3>Tempo di Cottura :</h3>
        <h3>{{ $prodotto['cottura'] }}</h3>
    </div>
    <div>
        <h3>Peso :</h3>
        {{ $prodotto['peso'] }}
    </div>  
</div>
<div class="prod_description">
    @foreach ($descrizione as $item)
    <p>{{ $item }}</p> 
    @endforeach
    
</div>
<img class="prod_img_footer" src="{{ $prodotto['src-p'] }}" alt="">
    
@endsection