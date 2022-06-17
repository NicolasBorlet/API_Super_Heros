<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" type="image/x-icon" href="../../public/images/favicon.png" />
    <title>Crypto Buran</title>
</head>
<body>

@include('layout.header')

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
            <form action="{{ route('crypto.index') }}" method="get">
                @csrf
                <input class="market" type="submit" value="+">
            </form>
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
