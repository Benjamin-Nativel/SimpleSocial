<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet" />
  <title>Document</title>
</head>
<body>
  


<form action="/register" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="flex items-center content-center justify-center h-full bg-red-400">
      
      <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif 
        <div class="p-10 bg-white border-t-4 border-red-300 rounded-md shadow-md border-top lg:max-w-md">
            <h1 class="pb-5 text-3xl font-semibold text-center text-slate-700">LET'S SUSCRIBE</h1>
          
              <div>
                <label for="files" class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50"> Ajouter

                un avatar</label>
                <input type="file" style="display:none" id="files" onchange="loadFile(event)"
                name="images" value="" required>
                
                  <img class="object-cover w-20 h-20 border-black rounded-full"  id="img-output">
              
                
                <label for="email" class="block text-sm text-slate-400">Email</label>
                <input type="email" name="email"
                  class="block w-full px-4 py-2 mt-2 bg-white border rounded-md shadow-inner text-slate-700 focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
              </div>
              <div class="mt-4">
                <div>
                  <label for="password" class="block text-sm text-slate-400">Password</label>
                  <input type="password" name="password" 
                    class="block w-full px-4 py-2 mt-2 bg-white border rounded-md shadow-inner text-slate-700 focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                 <div>
                  <label for="name" class="block text-sm text-slate-400">name</label>
                  <input type="text" name="name" class="block w-full px-4 py-2 mt-2 bg-white border rounded-md shadow-inner text-slate-700 focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                 </div>
                <div>
                  <label for="prenom" class="block text-sm text-slate-400">prénom</label>
                  <input type="text" name="prenom" class="block w-full px-4 py-2 mt-2 bg-white border rounded-md shadow-inner text-slate-700 focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div> 
                <div>
                  <label for="age" class="block text-sm text-slate-400">age</label>
                  <input type="date" name="age" class="block w-full px-4 py-2 mt-2 bg-white border rounded-md shadow-inner text-slate-700 focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <select multiple name="interest[]" class="block w-full px-4 py-2 mt-2 bg-white border rounded-md shadow-inner text-slate-700 focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                 @foreach($interest as $interest)
                  <option value="{{$interest->id}}">{{$interest->interet}}</option>
                  @endforeach
                </select>

                <div class="mt-6">
                  <button
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform rounded-md shadow-md shadow-slate-500 bg-slate-500 hover:bg-slate-700 focus:outline-none focus:bg-slate-700">
                    Register
                  </button>
                </div>
            
            <p class="mt-8 text-xs font-light text-center text-slate-400"><a href="#"
                class="font-medium text-slate-700 hover:underline"></a></p>
          </div>
        </div>
    
</div>
    </div>

</form>
<script>
  var loadFile = function(event) {
      var image = document.getElementById('img-output');
      image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

</body>
</html>