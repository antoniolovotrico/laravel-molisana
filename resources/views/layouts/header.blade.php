<div id="app">
    <header> 
        <div> 
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <nav>
            <ul>
                <li>
                    @foreach ($foot_data as $item)
                    <a href="{{ route($item['name']) }}" class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">{{ $item['name'] }}</a>
                    @endforeach
                </li>
            </ul>
        </nav>   
    </header>
    