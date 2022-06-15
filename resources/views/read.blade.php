@extends('layouts.app')

@section('main')

<body>
    

<table border="1" >
    <thead>
        <tr>
            <th>Id</th>
            <th >Interets</th>
        </tr>
    </thead>

    <tbody>
        <!-- On parcourt la collection de Post -->
        <tr>
            <td>
                {{$interest->id}}
            </td>
            <td>
                {{$interest->interet}}
            </td>
            <td>
                <!-- Formulaire pour supprimer un Post : "posts.destroy" -->
                    <!-- CSRF token -->
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
            </td>
        </tr>

    </tbody>
</table>
</body>

{{-- le 1er$interet dans le foreach correspond a la variable vert que tu creer dans le return de la fonction
le 2eme ( celui apres le as ) c'est celui que tu utilise dans tes td --}}

<!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->



@endsection