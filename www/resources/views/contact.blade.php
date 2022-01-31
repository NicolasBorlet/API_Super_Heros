<h1>{{$title}}</h1>

<ul>
    <li>Téléphone : 0783295170</li>
    <li>Email : nicolas.borlet@gmail.com</li>
    <li>16 chemin du Goléron 73600 Hautecour</li>
    <li>{{$slug}}</li>
</ul>


<form action="{{route('contact.form')}}" method="post">

    @csrf
    <input type="text"  name="firstname"placeholder="Prénom">
    <button>Valider</button>

</form>
