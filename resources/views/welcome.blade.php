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
                <img src="{{ asset('img/logo.png') }}" alt="">
                <nav>
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><a href="/">PRODOTTI</a></li>
                        <li><a href="about">CONTATTI</a></li>
                    </ul>
                </nav>   
            </header>
            <main> 
                <h2>LE LUNGHE</h2>
                <div class="lunghe_container">
                    @foreach ($data as $item)
                    @if ($item['tipo'] == "lunga")
                    <div class="card">
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
                        <img src="{{ $item['src'] }}" alt="">
                    </div>
                    @endif
                    @endforeach
                </div>
               
               
                
                
                
            </main>

        </div>
     
         
    </body>
</html>
