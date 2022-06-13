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

    <div class="flex h-screen ml-0 xl:ml-40 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
  
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
<!--
  <input type="search" class="block w-1/2 px-4 py-2 pl-4 pr-10 text-sm placeholder-gray-400 bg-gray-100 border border-transparent appearance-none md:hidden lg:hidden rounded-tg focus:bg-gray-50 focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Search" autocomplete="off"> -->
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

<div class="block md:grid md:grid-flow-row-dense md:grid-cols-3 md:grid-rows-3 ">
 <div class="col-span-2">
    <div class="pt-10">
<form class="w-full p-4 mb-1 bg-white rounded-lg shadow md:w-3/4">
            <textarea name="message" placeholder="Type something..." class="w-full p-2 text-sm placeholder-gray-400 bg-gray-100 border border-transparent rounded-lg appearance-none focus:outline-none rounded-tg"></textarea>
            <footer class="flex justify-between mt-2">
                <div class="flex gap-2">
                    <span class="flex items-center w-8 h-8 px-2 text-blue-400 transition duration-300 ease-out bg-blue-100 rounded-full cursor-pointer hover:bg-blue-500 hover:text-white">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    </span>
                    <span class="flex items-center w-8 h-8 px-2 text-blue-400 transition duration-300 ease-out bg-blue-100 rounded-full cursor-pointer hover:bg-blue-500 hover:text-white">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </span>
                    <span class="flex items-center w-8 h-8 px-2 text-blue-400 transition duration-300 ease-out bg-blue-100 rounded-full cursor-pointer hover:bg-blue-500 hover:text-white">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                    </span>
                </div>
                <button class="flex items-center px-4 py-2 text-sm text-white bg-blue-600 rounded-lg shadow-lg">Send
                    <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                </button>
            </footer>
        </form>
</div>
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
                    <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
                        <img class="object-cover w-full h-full " src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1399&amp;q=80" alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img class="object-cover w-full h-full " src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img class="object-cover w-full h-full " src="https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80" alt="">
                    </div>
                    <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img class="object-cover w-full h-full " src="https://images.unsplash.com/photo-1560393464-5c69a73c5770?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=765&amp;q=80" alt="">
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
                    <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                    <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                    <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="">
                    <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80" alt="">
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

        <div class="pb-4 bg-white rounded-lg shadow">
                <div class="flex flex-row px-2 py-3 mx-3">
                    <div class="w-auto h-auto border-2 border-green-500 rounded-full">
                        <img class="object-cover w-12 h-12 rounded-full shadow cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=200&amp;q=200">
                    </div>
                    <div class="flex flex-col mt-1 mb-2 ml-4">
                        <div class="flex inline text-sm font-semibold text-gray-600"><span class="flex-1 flex-shrink-0">Sara_Lauren</span>
                        <span class="flex-1 flex-shrink-0 mx-1"><svg viewBox="0 0 24 24" style="width: 20px; color:blue;" xmlns="http://www.w3.org/2000/svg"><g data-name="21. Verified" id="_21._Verified"><path d="M22.51,13.76a3,3,0,0,1,0-3.52l.76-1.05a1,1,0,0,0,.14-.9,1.018,1.018,0,0,0-.64-.64l-1.23-.4A2.987,2.987,0,0,1,19.47,4.4V3.1a1,1,0,0,0-1.31-.95l-1.24.4a3,3,0,0,1-3.35-1.09L12.81.41a1.036,1.036,0,0,0-1.62,0l-.76,1.05A3,3,0,0,1,7.08,2.55l-1.24-.4a1,1,0,0,0-1.31.95V4.4A2.987,2.987,0,0,1,2.46,7.25l-1.23.4a1.018,1.018,0,0,0-.64.64,1,1,0,0,0,.14.9l.76,1.05a3,3,0,0,1,0,3.52L.73,14.81a1,1,0,0,0-.14.9,1.018,1.018,0,0,0,.64.64l1.23.4A2.987,2.987,0,0,1,4.53,19.6v1.3a1,1,0,0,0,1.31.95l1.23-.4a2.994,2.994,0,0,1,3.36,1.09l.76,1.05a1.005,1.005,0,0,0,1.62,0l.76-1.05a3,3,0,0,1,3.36-1.09l1.23.4a1,1,0,0,0,1.31-.95V19.6a2.987,2.987,0,0,1,2.07-2.85l1.23-.4a1.018,1.018,0,0,0,.64-.64,1,1,0,0,0-.14-.9Zm-5.8-3.053-5,5a1,1,0,0,1-1.414,0l-3-3a1,1,0,1,1,1.414-1.414L11,13.586l4.293-4.293a1,1,0,0,1,1.414,1.414Z"/></g></svg></span></div>
                        <div class="flex w-full mt-1">
                            <div class="mr-1 text-xs text-blue-700 cursor-pointer font-base">
                                UX Design
                            </div>
                            <div class="text-xs font-thin text-gray-400">
                                • 1 day ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-b border-gray-100"></div>
         <!--        <div class="px-2 mx-3 mt-6 text-sm font-medium text-gray-400 mb-7">
                    <img class="w-full rounded" src="https://picsum.photos/536/354">
                </div> -->
                <div class="px-2 mx-3 mb-2 font-semibold text-gray-600">Love and gratitude</div>
                <div class="px-2 mx-3 mb-6 text-sm text-gray-500">Love and gratitude to both The Prime Minister, The Honorable Mia Amor Mottley and our President, Her Excellency The Most Honorable Dame Sandra Mason for trusting me with this honor!</div>
                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex w-full pt-2 pl-5 mt-1">
                        <span class="w-8 h-8 px-2 pt-2 mr-2 text-center text-gray-400 transition duration-300 ease-out bg-white border rounded-full cursor-pointer hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </span>
                        <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80" alt="">
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

            <div class="mt-10 bg-white rounded-lg shadow">
                <div class="flex flex-row px-2 py-3 mx-3">
                    <div class="w-auto h-auto border-2 border-green-500 rounded-full">
                        <img class="object-cover w-12 h-12 rounded-full shadow cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=200&amp;q=200">
                    </div>
                    <div class="flex flex-col mt-1 mb-2 ml-4">
                        <div class="text-sm font-semibold text-gray-600">Sara Lauren</div>
                        <div class="flex w-full mt-1">
                            <div class="mr-1 text-xs text-blue-700 cursor-pointer font-base">
                                UX Design
                            </div>
                            <div class="text-xs font-thin text-gray-400">
                                • 1 day ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class="px-2 mx-3 mt-6 text-sm font-medium text-gray-400 mb-7">
                    <img class="w-full rounded" src="https://picsum.photos/536/354">
                </div>
                <div class="px-2 mx-3 mb-2 font-semibold text-gray-600">Dummy text of the printing and typesetting industry</div>
                <div class="px-2 mx-3 mb-6 text-sm text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex w-full pt-2 pl-5 mt-1">
                        <span class="w-8 h-8 px-2 pt-2 mr-2 text-center text-gray-400 transition duration-300 ease-out bg-white border rounded-full cursor-pointer hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </span>
                        <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80" alt="">
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


            <div class="mt-10 bg-white rounded-lg shadow">
                <div class="flex flex-row px-2 py-3 mx-3">
                    <div class="w-auto h-auto border-2 border-green-500 rounded-full">
                        <img class="object-cover w-12 h-12 rounded-full shadow cursor-pointer" alt="User avatar" src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=200&amp;q=200">
                    </div>
                    <div class="flex flex-col mt-1 mb-2 ml-4">
                        <div class="text-sm font-semibold text-gray-600">Sara Lauren</div>
                        <div class="flex w-full mt-1">
                            <div class="mr-1 text-xs text-blue-700 cursor-pointer font-base">
                                UX Design
                            </div>
                            <div class="text-xs font-thin text-gray-400">
                                • 1 day ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class="px-2 mx-3 mt-6 text-sm font-medium text-gray-400 mb-7">
                    <img class="w-full rounded" src="https://picsum.photos/536/354">
                </div>
                <div class="px-2 mx-3 mb-2 font-semibold text-gray-600">Dummy text of the printing and typesetting industry</div>
                <div class="px-2 mx-3 mb-6 text-sm text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                <div class="flex justify-start mb-4 border-t border-gray-100">
                    <div class="flex w-full pt-2 pl-5 mt-1">
                        <span class="w-8 h-8 px-2 pt-2 mr-2 text-center text-gray-400 transition duration-300 ease-out bg-white border rounded-full cursor-pointer hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </span>
                        <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" alt="">
                        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80" alt="">
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


         <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm">12 Amis Commun</div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-blue-500 rounded-full text-md">
            Ajouter en amis
          </button>
        </div>

      </content>

      <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm"> 5 Amis Commun</div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-blue-500 rounded-full text-md">
            Ajouter en amis
          </button>
        </div>

      </content>

      <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm">10 Amis Commun</div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-blue-500 rounded-full text-md">
            Ajouter en amis
          </button>
        </div>

      </content>


    </main>

  </card>

  <card class="rounded-lg shadow-lg w-96">

    <header class="px-5 py-4 text-2xl font-bold">
      Invitations
    </header>

    <main class="px-5">

      <content class="grid grid-cols-6">

        <div class="">
          <img src="https://picsum.photos/200/200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold">
          <div class="text-sm"> Sangwa Albine </div>
          <div class="font-light text-gray-700 text-xm"> 2 Amis Commun</div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-blue-500 rounded-full text-md">
            Accepter
          </button>
        </div>

      </content>


    </main>

  </card>

  <card class="rounded-lg shadow-lg w-96">

    <header class="px-5 py-4 text-2xl font-bold">
    Amis Connectés
    </header>

    <main class="px-5">

      <content class="grid grid-cols-6">

        <div class="">
          <img src="https://picsum.photos/200/200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold">
          <div class="text-sm"> Sangwa Albine </div>
          <div class="font-light text-gray-700 text-xm"> En ligne </div>
        </div>

      </content>


         <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm"> En ligne</div>
        </div>

      

      </content>

      <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm"> En ligne</div>
        </div>

     

      </content>

      <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm"> En ligne</div>
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