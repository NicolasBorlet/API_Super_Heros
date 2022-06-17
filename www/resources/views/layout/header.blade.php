<header>

    <div class="header_tittle">
        <form action="{{ route('home.form') }}" method="get">
            @csrf
            <input type="submit" value="Crypto Buran">
        </form>
    </div>

    <div class="form">
        <form action="{{ route('exchange.index') }}" method="get">
            @csrf
            <input class="market" type="submit" value="Exchange">
        </form>

        <form action="{{ route('home.form') }}" method="post">
            @csrf
            <input class="txt" type="text" name="crypto_name" placeholder="Recherche">
            <input class="button" type="submit" value="GO !">
        </form>
    </div>

</header>
