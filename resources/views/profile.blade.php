
@extends('layouts.app')

@section('main')
<div class="h-screen p-relative" style="background-color:#e4e4e4;">
    <div class="flex ">

        <header class="pt-44">
            <!-- Navbar (left side) -->
            <div style="width: 350px;">
<div class="fixed h-screen pr-3 overflow-y-auto" style="width: 275px;">
    <!--Logo-->
   
    <div class="h-screen w-96
     px-6 border-r ">
        <div class="h-3/4 flex flex-col ">
           <h3 class="pl-1 text-sm flex items-center py-2 mb-2 ">
          
            <header class="px-5 py-4 text-lg font-bold text-pink-600">
              Informations personnelles
              </header>
             
           </h3> 
           <div class="ml-4">
           <p class="text-lg font-bold text-gray-800 "><i class="fa-solid fa-user-group mb-2 fa-xl text-gray-400 mr-2	"></i> Femme</p>
           <p class="text-sm text-gray-500 ml-10">Genre </p>
          <p class="text-lg font-bold mt-2 text-gray-800"> <i class="fa-solid fa-cake-candles fa-xl text-gray-400 mr-2"></i>  27/24/1988</p>
           <p class="text-sm text-gray-500 mt-4 ml-10">Date de naissance</p>
           <p class="text-lg font-bold mt-2 text-gray-800"> <i class="fa-solid fa-bowling-ball fa-xl text-gray-400 mr-2"></i> Natation, série, sport, <br> voyage, tatouage, roadtrip</p>
           <p class="text-sm text-gray-500 mt-4 ml-10">Centres d'înterêt</p>
           </div>
           <h3 class="pl-1 text-sm flex items-center py-2 mb-2 ">
              

              <card class="">

                <header class="px-5 py-4 text-xl font-bold text-pink-600">
                Amis
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
            
                
            
                </main>
            
              </card>
           </h3>
        </div>
    </div> 
    
    <!-- Nav-->
  
   
        </header>

        <main class="bg-slate-50" role="main">
            <div class="flex" style="width: 990px;">
                <section class="border border-white w-2000 border-y-0">
                    <!--Content (Center)-->
                        <!-- Nav back-->

<!-- User card-->
<div>
<div class=" bg-center bg-no-repeat bg-cover w-full-height" style=" background-image: url(https://cache.marieclaire.fr/data/photo/w1200_h630_ci/61/coucher-de-soleil.jpg);">
    <img class="w-full h-full opacity-0 " src="https://cache.marieclaire.fr/data/photo/w1200_h630_ci/61/coucher-de-soleil.jpg" alt="">
</div>
<div class="p-50">
    <div class="relative flex w-full">
        <!-- Avatar -->
        <div class="flex justify-center flex-1">
            <div style="margin-top: -6rem;">
                <div style="height:20rem; width:20rem;" class="relative rounded-full ml-16 justify-items-center md avatar">
                    <img style="height:20rem; width:20rem;" class="relative border-4 border-white rounded-full w-16 md:w-32 lg:w-48" src="https://m.media-amazon.com/images/I/41DlTmVSO7L.jpg" alt="">
                    <div class="absolute"></div>
                </div>
            </div>
        </div>
        <!-- Follow Button -->
        <div class="flex flex-col text-right">
            
        </div>
    </div>

    <!-- Profile info -->
    <div class="justify-center w-full mt-3 ml-3 space-y-1">
        <!-- User basic-->
        <div>
            <h2 class="text-xl font-bold leading-6 text-center text-gray">Lizzo</h2>
            
        </div>
        <!-- Description and others -->
        <div class="self-center mt-3 mb mx-28 ">
           <a  href=""> <p class="mb-2 leading-tight text-center mt- text-gray"> <i class="fa-solid fa-pen"></i> Modifier Profil </p> </a>
        
        </div>
     
    </div>
</div>
<hr class="border-white">
</div>

<ul class="list-none">
                <li>
                <!--second tweet-->
<article class="transition ease-in-out bg-slate-100 duration-350">
<div class="flex flex-shrink-0 p-4 pb-0">
    <a href="#" class="flex-shrink-0 block group">
        <div class="flex items-center">
            <div>
                <img class="inline-block w-10 h-10 rounded-full" src="https://m.media-amazon.com/images/I/41DlTmVSO7L.jpg" alt="">
              </div>
                <div class="ml-3">
                  <p class="">
               
                      <span class="text-sm leading-5 font-medium text-gray-700 group-hover:text-gray-300 transition ease-in-out duration-150">
                          Lizzo
                      </span>
                  </p>
              </div>
            
           
        </div>
    </a>
</div>


<div class="pl-16">
    <p class="flex-shrink text-base font-medium width-auto text-gray">
        Oh right. I forgot about the battle. I just told you! You've killed me! You don't know how to do any of those. Hey, you add a one and two zeros to that or we walk! No! Don't jump!

I'm sure those windmills will keep them cool. Who am I making this out to? Yes, if you make it look like an electrical fire. When you do things right, people won't be sure you've done anything at all. Whoa a real live robot; or is that some kind of cheesy New Year's costume?

    </p>

    <div class="pt-3 pr-6 md:flex-shrink">
        <div class="w-full h-64 bg-center bg-no-repeat bg-cover rounded-lg" style="height: 500px; background-image: url(https://resize.elle.fr/article_webp/var/plain_site/storage/images/loisirs/musique/news/harry-styles-il-dit-oui-a-un-retour-des-one-direction-3802675/90734173-1-fre-FR/Harry-Styles-il-dit-oui-a-un-retour-des-One-Direction.jpg);">
        <img class="w-full h-full opacity-0" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=448&amp;q=80" alt="">
    </div>
    </div>


    <div class="flex items-center py-4">
        <div class="flex items-center flex-1 text-xs text-gray-400 transition ease-in-out text-gray hover:text-blue-400 duration-350">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
            <g>
              <path d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z"></path>
            </g>
          </svg>
          12.3 k
        </div>
        <div class="flex items-center flex-1 text-xs text-gray-400 transition ease-in-out text-gray hover:text-green-400 duration-350">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
            <g>
              <path d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z"></path>
            </g>
          </svg>
          14 k
        </div>
        <div class="flex items-center flex-1 text-xs text-gray-400 transition ease-in-out text-gray hover:text-red-600 duration-350">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
            <g>
              <path d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z"></path>
            </g>
          </svg>
          14 k
        </div>
        <div class="flex items-center flex-1 text-xs text-gray-400 transition ease-in-out text-gray hover:text-blue-400 duration-350">
          <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
            <g>
              <path d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z"></path>
              <path d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z"></path>
            </g>
          </svg>
        </div>
      </div>

</div>
<hr class="border-white">
</article>
        </li>
                <li>
                <!--second tweet-->

                <li>
                <!--second tweet-->

        </li>
        </ul>
                </section>


               

                
                        <!--Aside menu (right side)-->
                                <div style="max-width:350px;">
    <div class="fixed h-screen ml-10 overflow-y-auto mt-60 ">


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
      <button class="px-4 py-1 text-xs font-semibold text-pink-600 rounded-full text-md">
        Ajouter en ami
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
      <button class="px-4 py-1 text-xs font-semibold text-pink-500 rounded-full text-md">
        Ajouter en ami
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
      <button class="px-4 py-1 text-xs font-semibold text-pink-500 rounded-full text-md">
        Ajouter en ami
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
      <button class="px-4 py-1 text-xs font-semibold text-pink-500 rounded-full text-md">
        Ajouter en ami
      </button>
    </div>

  </content>


</main>

</card>
        </div>
    </div>
</div>
                    </aside>
                </div>
            </main>

        </div>

   





<style>
.overflow-y-auto::-webkit-scrollbar, .overflow-y-scroll::-webkit-scrollbar, .overflow-x-auto::-webkit-scrollbar, .overflow-x::-webkit-scrollbar, .overflow-x-scroll::-webkit-scrollbar, .overflow-y::-webkit-scrollbar, body::-webkit-scrollbar {
display: none;
background-color: aqua

}

/* Hide scrollbar for IE, Edge and Firefox */
.overflow-y-auto, .overflow-y-scroll, .overflow-x-auto, .overflow-x, .overflow-x-scroll, .overflow-y, body {
-ms-overflow-style: none;
/* IE and Edge */
scrollbar-width: none;
/* Firefox */
}

.bg-dim-700 {
--bg-opacity: 1;

}

html, body {
margin: 0;
background-color:#e4e4e4; !important

}

svg.paint-icon {
fill: currentcolor;
}

    </style>
    @endsection
