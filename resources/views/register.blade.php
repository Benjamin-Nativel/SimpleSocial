
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('./css/app.css')}}">
  <title>Register</title>
</head>



<body>
  

<form action="/register" method="POST">
  @csrf
    <div class="flex content-center justify-center h-full items-center bg-red-400">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif 

        <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
          <div class="bg-white border-t-4 p-10 border-red-300 rounded-md shadow-md border-top lg:max-w-md">
            <h1 class="text-3xl font-semibold text-center text-slate-700 pb-5">LET'S SUSCRIBE</h1>
          
              <div>
                 
                <label for="email" class="block text-sm text-slate-400">Email</label>
                <input type="email" name="email"
                  class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
              </div>
              <div class="mt-4">
                <div>
                  <label for="password" class="block text-sm text-slate-400">Password</label>
                  <input type="password" name="password" 
                    class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                 <div>
                  <label for="name" class="block text-sm text-slate-400">name</label>
                  <input type="text" name="name" class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                 </div>
                <div>
                  <label for="prenom" class="block text-sm text-slate-400">prénom</label>
                  <input type="text" name="prenom" class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div> 
                <div>
                  <label for="age" class="block text-sm text-slate-400">age</label>
                  <input type="date" name="age" class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <select multiple name="interest[]" class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                 @foreach($interest as $interest)
                  <option value="{{$interest->id}}">{{$interest->interet}}</option>
                </select>

@endforeach
                <div class="mt-6">
                  <button
                    class="w-full px-4 py-2 tracking-wide text-white shadow-slate-500 shadow-md  bg-slate-500 transition-colors duration-200 transform rounded-md hover:bg-slate-700  focus:outline-none focus:bg-slate-700">
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
</body>

</html>
