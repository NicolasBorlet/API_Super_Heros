
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" href="C:\xampp\htdocs\API_Super_Heros\www\resources\images\favicon.png" />
</head>
<body>

<header>

    <div>
        <h1>Crypto DoDo</h1>
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
<main>
    <div class="main_menu">
        <p>Rank</p>
        <p>Name</p>
        <p>Symbol</p>
        <p>Price Usd</p>
        <p>Last 1h</p>
        <p>Last 24h</p>
        <p>Last 7d</p>
    </div>

    @foreach ($cryptos as $crypto)
        <div class="list_cryptos">
            <p>{{$crypto['rank']}}</p>
            <p>{{$crypto['name']}}</p>
            <p>{{$crypto['symbol']}}</p>
            <p>{{$crypto['price_usd']}}</p>
            <p>{{$crypto['percent_change_1h']}}</p>
            <p>{{$crypto['percent_change_24h']}}</p>
            <p>{{$crypto['percent_change_7d']}}</p>
        </div>
    @endforeach
</main>
</body>
</html>
<?php
