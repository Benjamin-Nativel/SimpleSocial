
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/app.css')}}">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <div class="flex flex-col">

        <div>
            <div class="aligns-items">
                <h1 class="text-4xl"> Invitations</h1>
            </div>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                   
                        @foreach ($demandes as $demande)
                        
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <div>
                                    <a class="block relative h-48 rounded overflow-hidden">
                                        <img alt="avatar_ami" class="object-cover object-center w-full h-full block"
                                            src="{{$demande->avatar}}">
                                    </a>
                                    <div class="mt-4">

                                        <h2 class="text-gray-900 title-font text-lg font-medium">{{$demande->name}}</h2>
                                        <form action="#" method="post">
                                          @csrf
                                          <input type="hidden" name="accepted" value=1>
                                        <button style="background-color:rgb(59 130 246)"
                                            class="bg-blue-500 hover:bg-blue-900 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            Confirmer
                                        </button>
                                      </form>
                                        <button
                                            class="bg-transparent  text-blue-700 font-semibold hover:text-red-500 py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </section>
        </div>

        <div>
            <h1 class="text-4xl"> Vous connaissez peut-Ãªtre</h1>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        @foreach ($amis as $ami)


                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="{{ $ami->avatar }}">
                                </a>
                                <div class="mt-4">
                                    <h2 class="text-gray-900 title-font text-lg font-medium">{{ $ami->name }}</h2>
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">50 amis en commun</h3>

                                    <form action="{{ route('amis.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="users_id" value="1">
                                        <input type="hidden" name="amis_id" value="{{ $ami->id }}">
                                        <button style="background-color:rgb(59 130 246)"
                                            class="bg-blue-500 hover:bg-blue-900 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            + Ajouter en amis
                                        </button>
                                    </form>

                                    <button
                                        class="bg-transparent  text-blue-700 font-semibold hover:text-red-500 py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>