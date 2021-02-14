@extends('layouts.app')
@section('title')
prodotti
@endsection
@section('main_content')
    <h2>LE LUNGHE</h2>
    <div class="lunghe_container">
        @foreach ($dati as $key => $item)
        @if ($item['tipo'] == "lunga")
        <div class="card">
            <div class="overlay"></div>
            <img src="{{ $item['src'] }}" alt="" class="background">
            <a href="{{ route('prodotto', $key) }}">
                <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
                <h3>{{ $item['titolo'] }}</h3>
                <p>Cottura:{{ $item['cottura'] }}</p>
            </a>      
        </div>
        @endif
        @endforeach
    </div>
    <h2>LE CORTE</h2>
    <div class="corte_container">
        @foreach ($dati as $key => $item)
        @if ($item['tipo'] == "corta")
        <div class="card">
            <div class="overlay"></div>
            <img src="{{ $item['src'] }}" alt="" class="background">
            <a href="{{ route('prodotto', $key) }}">
                <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
                <h3>{{ $item['titolo'] }}</h3>
                <p>Cottura:{{ $item['cottura'] }}</p>
            </a>      
        </div>
        @endif
        @endforeach
    </div>
    <h2>LE CORTISSIME</h2>
    <div class="cortissime_container">
        @foreach ($dati as $key => $item)
        @if ($item['tipo'] == "cortissima")
        <div class="card">
            <div class="overlay"></div>
            <img src="{{ $item['src'] }}" alt="" class="background">
            <a href="{{ route('prodotto', $key) }}">
                <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
                <h3>{{ $item['titolo'] }}</h3>
                <p>Cottura:{{ $item['cottura'] }}</p>
            </a>      
        </div>
        @endif
        @endforeach
    </div>
@endsection