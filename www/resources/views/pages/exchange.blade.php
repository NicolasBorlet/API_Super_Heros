<html>
<head>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="icon" href="C:\xampp\htdocs\API_Super_Heros\www\resources\images\favicon.png" />
</head>
<body>

@include('layout.header')

<main>
    <div class="title">
        <h1>Derniers échanges</h1>
    </div>

    @foreach($exchanges as $exchange)
        <div class="list_exchange">
            <p>{{$exchange['1']}}</p>
            <p>{{$exchange['name']}}</p>
            <p>{{$exchange['country']}}</p>
        </div>
    @endforeach
</main>

</body>
</html>


