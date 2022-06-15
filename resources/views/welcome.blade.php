@extends('layouts.app')





@section('main')
<script defer="" src="https://unpkg.com/alpinejs@3.1.1/dist/cdn.min.js"></script>
<style>

    .hover-image-1{
        transition: ease-in-out 0.2s;
    }
    .hover-image-1:hover{
        width: 50px;
        height: 50px;
    }

</style>

    <div class="flex h-screen ml-0 xl:ml-40 " :class="{ 'overflow-hidden': isSideMenuOpen}">
  
      <div class="flex flex-col flex-1">
        <header class="z-10 py-4 shadow-xs ">
          <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
            <!-- Mobile hamburger -->
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple">
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <!-- Search input -->

  <div class="flex justify-between md:hidden">
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Profile menu -->
              <li class="relative ">
                <button class="align-middle border-2 border-gray-300 rounded-full shadow-lg focus:shadow-outline-purple focus:outline-none">
                  <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full hover-image-1" src="https://picsum.photos/200/200?i=203" alt="" aria-hidden="true">
                </button>
              </li>

                     <li class="relative">
                <button class="align-middle border-2 border-gray-300 rounded-full shadow-lg focus:shadow-outline-purple focus:outline-none">
                  <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full hover-image-1" src="https://picsum.photos/200/200?i=205" alt="" aria-hidden="true">
                </button>
              </li>

                     <li class="relative">
                <button class="align-middle border-2 border-gray-300 rounded-full shadow-lg focus:shadow-outline-purple focus:outline-none">
                  <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full hover-image-1" src="https://picsum.photos/200/200?i=207" alt="" aria-hidden="true">
                </button>
              </li>

                     <li class="relative">
                <button class="align-middle border-2 border-gray-300 rounded-full shadow-lg focus:shadow-outline-purple focus:outline-none">
                  <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full hover-image-1" src="https://picsum.photos/200/200?i=209" alt="" aria-hidden="true">
                </button>
              </li>

                  <li class="relative">
                <button class="align-middle border-2 border-gray-300 rounded-full shadow-lg focus:shadow-outline-purple focus:outline-none">
                  <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full hover-image-1" src="https://picsum.photos/200/200?i=2011" alt="" aria-hidden="true">
                </button>
              </li>

            </ul>

          </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
          <!-- Remove everything INSIDE this div to a really blank page -->

<!-- Main Contents -->


<div class="mb-6 bg-white rounded-lg shadow">
            <div class="flex flex-row px-2 py-3 mx-3">
                <div class="w-auto h-auto rounded-full">
                    <img class="object-cover w-12 h-12 rounded-full shadow cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80">
                </div>
                <div class="flex flex-col mt-1 mb-2 ml-4">
                    <div class="text-sm font-semibold text-gray-600">John Doe</div>
                    <div class="flex w-full mt-1">
                        <div class="mr-1 text-xs text-blue-700 cursor-pointer font-base">
                            SEO
                        </div>
                        <div class="text-xs font-thin text-gray-400">
                            • 30 seconds ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-b border-gray-100"></div>
            <div class="px-2 mx-3 mt-6 text-sm font-medium text-gray-400 mb-7">
                <div class="grid grid-cols-6 col-span-2 gap-2 ">
                    <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
                        <img class="object-cover w-full h-full " src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="px-2 mx-3 mb-6 text-sm text-gray-500">Lorem Ipsum is simply dummy ... <span class="text-gray-400">more</span></div>
            <div class="flex justify-start mb-4 border-t border-gray-100">
                <div class="flex w-full pt-2 pl-5 mt-1">
                    <span class="w-8 h-8 px-2 pt-2 mr-2 text-center text-gray-400 transition duration-300 ease-out bg-white border rounded-full cursor-pointer hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                        </svg>
                    </span>
                   </div>
                <div class="flex justify-end w-full pt-2 pr-5 mt-1">
                    <span class="w-8 h-8 px-2 py-2 mr-2 text-center text-blue-400 transition duration-300 ease-out bg-blue-100 rounded-full cursor-pointer hover:bg-blue-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                    </span>
                    <span class="h-8 px-2 py-2 text-center text-gray-100 transition duration-300 ease-out bg-gray-100 rounded-full cursor-pointer hover:bg-gray-50">
                        <svg class="w-4 h-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="flex w-full border-t border-gray-100">
                <div class="flex flex-row mx-5 mt-3 text-xs">
                    <div class="flex items-center mb-2 mr-4 font-normal text-gray-700 rounded-md">Comments:<div class="ml-1 text-gray-400 text-ms"> 30</div></div>
                    <div class="flex items-center mb-2 mr-4 font-normal text-gray-700 rounded-md">Views: <div class="ml-1 text-gray-400 text-ms"> 60k</div></div>
                </div>
                <div class="flex justify-end w-full mx-5 mt-3 text-xs">
                    <div class="flex items-center mb-2 mr-4 text-gray-700 rounded-md">Likes: <div class="ml-1 text-gray-400 text-ms"> 120k</div></div>
                </div>
            </div>

            <div class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                <img class="object-cover w-10 h-10 mr-2 rounded-full shadow cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80">
                <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                    <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                    <svg class="w-6 h-6 text-gray-400 transition duration-300 ease-out hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    </button>
                </span>
                   <input type="search" class="w-full py-2 pl-4 pr-10 text-sm placeholder-gray-400 bg-gray-100 border border-transparent appearance-none rounded-tg focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Post a comment..." autocomplete="off">
            </div>
        </div>

        

 </div>

 
  <div class="sticky hidden py-1 md:block lg:block top-6">

  
<card class="rounded-lg shadow-lg w-96">

    <header class="px-5 py-4 text-2xl font-bold">
      Suggestions
    </header>

    <main class="px-5">

      <content class="grid grid-cols-6">

        <div class="">
          <img src="https://picsum.photos/200/200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold">
          <div class="text-sm"> Sangwa Albine </div>
          <div class="font-light text-gray-700 text-xm"> 15 Amis Commun </div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-blue-500 rounded-full text-md">
            Ajouter en amis
          </button>
        </div>

      </content>


        

     


    </main>

  </card>


</div>
  </div>
</div>
        </main>
      </div>
    </div>



@endsection
