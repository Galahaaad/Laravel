<h1>La chaussure dont l'id est {{ $shoe->id }}</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Marque</th>
        <th>Couleur</th>
        <th>Lieu Fabrication</th>
    </tr>
</table>
 <tr>
     <td>{{$shoe->id}}</td>
     <td>{{$shoe->nom}}</td>
     <td>{{$shoe->marque}}</td>
     <td>{{$shoe->couleur}}</td>
     <td>{{$shoe->lieu_fabrication}}</td>
     <td>{{$shoe->getShoeName('Hello')}}</td>
 </tr>
