@include('layout.header')

    <!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/app.css">
    <title>Home</title>
</head>

<body>

<form action="{{ route('home.form') }}" method="post">
    @csrf
    <input type="text" name="hero_name" placeholder="Search a hero">
    <input type="submit" value="send">
</form>

@foreach ((array)$heroes as $hero)
    <div class="list_hero">
        <p>Héro numéro {{$heroes['id']}} :</p>
        <p>{{$heroes['name']}}</p>
        <a href=""><img src="{{$image['url']}}" alt="image"></a>
    </div>
@endforeach



</body>
</html>
