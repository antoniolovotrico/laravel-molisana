@extends('layouts.app')

@section('main_content')
    <h2>LE LUNGHE</h2>
    <div class="lunghe_container">
        @foreach ($data as $item)
        @if ($item['tipo'] == "lunga")
        <div class="card">
            <div class="overlay"></div>
            <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
            <h3>{{ $item['titolo'] }}</h3>
            <p>Cottura:{{ $item['cottura'] }}</p>
            <img src="{{ $item['src'] }}" alt="">
        </div>
        @endif
        @endforeach
    </div>
    <h2>LE CORTE</h2>
    <div class="corte_container">
        @foreach ($data as $item)
        @if ($item['tipo'] == "corta")
        <div class="card">
            <div class="overlay"></div>
            <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
            <h3>{{ $item['titolo'] }}</h3>
            <p>Cottura:{{ $item['cottura'] }}</p>
            <img src="{{ $item['src'] }}" alt="">
        </div>
        @endif
        @endforeach
    </div>
    <h2>LE CORTISSIME</h2>
    <div class="cortissime_container">
        @foreach ($data as $item)
        @if ($item['tipo'] == "cortissima")
        <div class="card">
            <div class="overlay"></div>
            <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
            <h3>{{ $item['titolo'] }}</h3>
            <p>Cottura:{{ $item['cottura'] }}</p>
            <img src="{{ $item['src'] }}" alt="">
        </div>
        @endif
        @endforeach
    </div>
@endsection