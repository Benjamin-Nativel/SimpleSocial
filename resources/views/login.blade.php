
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('./css/app.css')}}">
  <title>Document</title>
</head>
<body class="bg-red-500/90">
  




    <form class="mt-6" action="/login" method="POST">
      @csrf
          <div class="bg-whit border-t-4 p-10 border-white bg-white rounded-md shadow-md border-top lg:max-w-md">
      
            <h1 class="text-3xl font-semibold text-center padding-r-amber-500 text-slate-700 pb-6">Login</h1>
           <h1 class="text-xl font-semibold text-center padding-r-amber-500 text-slate-700">SIGN IN</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif 
              <div>
                <label for="email" class="block text-sm text-slate-400">Email</label>
                <input type="email" name="email"
                  class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
              </div>
              <div class="mt-4">
                <div>
                  <label for="password" class="block text-sm text-slate-400">Password</label>
                  <input type="password" name="password" id="password"
                    class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
               
                <a href="#" class="text-xs text-slate-400 hover:underline ">Forget Password?</a>
                <div class="mt-6">
                  <a href="/livres">  <button
                    class="w-full px-4 py-2 tracking-wide text-white shadow-slate-500 shadow-md  bg-slate-500 transition-colors duration-200 transform rounded-md hover:bg-slate-700  focus:outline-none focus:bg-slate-700">
                    Login
                  </button>
                </a>
                </div>
            
            <p class="mt-8 text-xs font-light text-center text-slate-400"> Don't have an account? <a href="#"
                class="font-medium text-slate-700 hover:underline">Sign up</a></p>
          </div>
        </div>
    </form>


</body>
</html>