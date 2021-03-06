@extends('layouts.app')
@section('title')
prodotti
@endsection
@section('main_content')

    <div class="lunghe_container">
        @foreach ($dati as $key => $item)
            @if ($loop -> first)
            <h2>{{ $item['tipo'] }}</h2>   
            @elseif ($loop -> index == 5)
            <h2>{{ $item['tipo'] }}</h2> 
            @elseif ($loop -> index == 11)
            <h2>{{ $item['tipo'] }}</h2>
            @endif
            <div class="card">
                <div class="overlay"></div>
                <img src="{{ $item['src'] }}" alt="" class="background">
                <a href="{{ route('prodotto', $key) }}">
                    <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
                    <h3>{{ $item['titolo'] }}</h3>
                    <p>Cottura:{{ $item['cottura'] }}</p>
                </a>      
            </div>   
        @endforeach
    </div>
@endsection