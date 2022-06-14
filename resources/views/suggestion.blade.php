<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/app.css')}}">
    <title>suggestion d'amis</title>
</head>
<body>
    <div class="suggestion " > 
         @foreach ($user as $user)
         <div class="border-4 border-red-600">
             <div>
    <img  class="border-1 border-full" src="{{$user->avatar}}" alt="avatar" >
    </div>
    <div class="info mb-10">
        <p class="title">{{$user->name}}</p>

        <bouton class="">Ajouter</bouton>
        <bouton class="supprimer"><span class="icon-plus">Supprimer</span></bouton>

@endforeach
    </div>
</div>
    </div>
</body>
</html>
