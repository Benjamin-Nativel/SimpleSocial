
<card class="rounded-lg shadow-lg w-96">

    <header class="px-5 py-4 text-2xl font-bold text-pink-600">
      Suggestions
    </header>

    <main class="px-5">
        <content class="grid grid-cols-6">
          {{-- @foreach ($users as $user) --}}

        <div class="">
          <img src="https://picsum.photos/200/200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold">
          {{-- <div class="text-sm"> {{$user->name}} {{$user->prenom}} </div> --}}
          <div class="font-light text-gray-700 text-xm"> 15 Amis Commun </div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-pink-600 rounded-full text-md ">
            Ajouter en amis
          </button>
        </div>

      </content>
      {{-- @endforeach --}}

         <content class="grid grid-cols-6 mt-6">

        <div class="">
          <img src="https://picsum.photos/200/200?i=200" class="w-8 h-8 rounded-full">
        </div>

        <div class="flex flex-col col-span-3 px-1 font-semibold ">
          <div class="text-sm"> Mbonyintege </div>
          <div class="font-light text-gray-700 text-xm">12 Amis Commun</div>
        </div>

        <div class="col-span-2 py-2 justify-self-end">
          <button class="px-4 py-1 text-xs font-semibold text-pink-600 rounded-full text-md">
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
          <button class="px-4 py-1 text-xs font-semibold text-pink-600 rounded-full text-md">
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
          <button class="px-4 py-1 text-xs font-semibold text-pink-600 rounded-full text-md">
            Ajouter en amis
          </button>
        </div>

      </content>


    </main>

  </card>


