<div id="app">
    <header> 
        <div> 
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a></li>
                <li><a href="{{ route('prodotti') }}" class="{{ Route::currentRouteName() === 'prodotti' ? 'active' : '' }}">PRODOTTI</a></li>
                <li><a href="{{ route('contatti') }}" class="{{ Route::currentRouteName() === 'contatti' ? 'active' : '' }}">CONTATTI</a></li>
            </ul>
        </nav>   
    </header>
    