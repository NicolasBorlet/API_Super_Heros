<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" type="image/x-icon" href="../../public/images/favicon.png" />
    <title>Crypto Buran</title>
</head>
<body>

@include('layout.header')


@foreach ($markets as $market)
    <div class="list_markets">
        <p>{{$market['name']}}</p>
        <p>{{$market['base']}}</p>
        <p>{{$market['quote']}}</p>
        <p>{{$market['price']}}</p>
        <p>{{$market['price_usd']}}</p>
        <p>{{$market['volume']}}</p>
        <p>{{$market['volume_usd']}}</p>
        <p>{{$market['time']}}</p>
    </div>
@endforeach
