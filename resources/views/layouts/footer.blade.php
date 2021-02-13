            <footer>
                <div class="container_footer">
                    <div>
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <div>
                        <h2>Main Menu</h2>
                        @foreach ($foot_data as $item)
                            <a href="{{ route($item['name']) }}">{{ $item['name'] }}</a>
                        @endforeach
                    </div>
                    <div>
                        <h2>Prodotti</h2>
                        <div class="link">
                        @foreach ($dati as $key => $item)
                            <a href="{{ route('prodotto', $key) }}">{{ $item['titolo'] }}</a>
                        @endforeach
                        </div>
                    </div>
                </div>

            </footer>
        </div>  
    </body>
</html>