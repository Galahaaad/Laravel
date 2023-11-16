<h1>Les chaussures</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Couleur</th>
            <th>Lieu Fabrication</th>
        </tr>

@foreach($shoes as $shoe)
    <tr>
        <td>{{$shoe['id']}}</td>
        <td>{{$shoe['nom']}}</td>
        <td>{{$shoe['prix']}}</td>
        <td>{{$shoe['marque']}}</td>
        <td>{{$shoe['couleur']}}</td>
        <td>{{$shoe['lieu_fabrication']}}</td>

    </tr>
        @endforeach
    </table>
