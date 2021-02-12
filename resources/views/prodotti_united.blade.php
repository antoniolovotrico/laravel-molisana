<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel-molisana</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    </head>
    <body>
        <div id="app">
            <header>
                <div> 
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <nav>
                    <ul>
                        <li><a href="home">HOME</a></li>
                        <li><a href="/">PRODOTTI</a></li>
                        <li><a href="contatti">CONTATTI</a></li>
                    </ul>
                </nav>   
            </header>
            <main>
                <h2>LE LUNGHE</h2>
                <div class="lunghe_container">
                    @foreach ($data as $item)
                    @if ($item['tipo'] == "lunga")
                    <div class="card">
                        <div class="overlay"></div>
                        <img class="svg" src="{{ asset('img/icon.svg') }}" alt="">
                        <p>{{ $item['titolo'] }}</p>
                        <p>{{ $item['cottura'] }}</p>
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
                        <p>{{ $item['titolo'] }}</p>
                        <p>{{ $item['cottura'] }}</p>
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
                        <p>{{ $item['titolo'] }}</p>
                        <p>{{ $item['cottura'] }}</p>
                        <img src="{{ $item['src'] }}" alt="">
                    </div>
                    @endif
                    @endforeach
                </div>
            </main>
        </div>  
    </body>
</html>