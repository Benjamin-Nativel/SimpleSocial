<!-- follow me on twitter @asad_codes -->


<div class="flex flex-wrap pb-5 place-items-center">
    <section class="relative mx-auto">
        <!-- navbar -->
            
        <nav class="flex justify-between w-screen text-white bg-gradient-to-l from-orange-300 to-rose-500">
          <div class="flex items-center w-full px-0 py-6 xl:px-12">
            <a class="text-3xl font-bold font-heading" href="#">
              <!-- <img class="h-9" src="logo.png" alt="logo"> -->
              Yes
            </a>
            <!-- Nav Links -->
            <ul class="px-4 mx-20 space-x-12 font-semibold xl:w-96 md:flex font-heading">
              <div class="relative text-gray-600">
                <input type="search" name="search" placeholder="Search" class="w-10 h-10 px-0 pr-40 text-sm bg-white rounded-full xl:w-96 focus:outline-none">
                <button type="submit" class="absolute top-0 right-0 mt-3 mr-4">
                  <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                  </svg>
                </button>
              </div>
            </ul>
            <!-- Header Icons -->
            <div class="flex items-center space-x-5 md:ml-auto xl:flex">
              
              <a class="hover:text-gray-200 " href="#">
                <i class="fa-solid fa-user-group fa-2xl text-fuchsia-500"></i>
              </a>
              <a class="flex items-center hover:text-gray-200" href="#">
                <i class="text-yellow-200 fa-solid fa-bell fa-2xl"></i>
              </a>
              <!-- Sign In / Register      -->
              <a class="flex items-center hover:text-gray-200" href="#">
                <i class="fa-solid fa-paper-plane fa-2xl"></i>
              </a>
              @if(Auth::check())
              <a class="flex items-center hover:text-gray-200" href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
              @endif
              
            </div>
          </div>
          <!-- Responsive navbar -->
          
          
        </section>
      </div>
      {{-- <!-- Does this resource worth a follow? -->
        <div class="absolute bottom-0 right-0 z-10 mb-4 mr-4">
          <div>
            <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 transition-all transform rounded-full shadow hover:shadow-lg hover:scale-110 hover:rotate-12">
              <img class="object-cover object-center w-full h-full rounded-full" src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg"/>
            </a>
          </div>
        </div>
        --}}
        
