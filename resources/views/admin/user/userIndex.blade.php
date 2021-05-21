<x-app-layout>
    
    @admin
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>ALL USERS</b></p>
                    <br>

                    <div class="">
                        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
                            
                          <!-- SMALL CARD ROUNDED -->
                          @foreach ($users as $user)
                              
                          <div class="border-black dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around | transition-colors duration-500">
                            <img class="w-16 h-16 object-cover rounded-full" src={{asset('img/' . $user->avatar->nom . '.png')}} alt="">
                            <div class="flex flex-col justify-center">
                              <p class="text-gray-900 dark:text-gray-300 font-semibold">{{ $user->name }} {{ $user->prenom }} </p>
                              <p class="text-black dark:text-gray-100 text-justify font-semibold">{{ $user->age }} ans</p>
                              <p class="text-black dark:text-gray-100 text-justify font-semibold">Rôle : {{ $user->role->nom }}</p>
                              <a href="{{route('userEdit', Auth::id())}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button></a>
                            </div>
                          </div>
                          @endforeach
                          <!-- END SMALL CARD ROUNDED -->
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endadmin

</x-app-layout>