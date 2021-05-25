<x-app-layout>

    @admin
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>AVATARS</b></p>
                    <br>
                    <div class="flex">
                        @foreach ($avatars as $avatar)
                        <div class="mx-4">
                            <img class="w-22 h-22 object-cover rounded-full" src={{asset('img/' . $avatar->nom . '.png')}} alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>Ajouter un avatar</b></p>
                    <br>

                    <form method="POST" action="{{ route('avatarStore') }}" enctype="multipart/form-data">
                        @csrf
            
                        {{-- <!-- Nom -->
                        <div>
                            <x-label for="nom" :value="__('Nom')" />
            
                            <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" required autofocus />
                        </div> --}}
            
                        <!-- Fichier -->
                        <div class="mt-4">
                            <x-label for="nom" :value="__('Fichier')" />
            
                            <x-input id="nom" class="block mt-1 w-full" type="file" name="nom" :value="old('nom')" required autofocus />
                        </div>

                        {{-- <div class="mb-4">
                            <label for="image">Votre image - Input</label>
                            <input type="file" name="img" id="img">
                        </div> --}}
                        
                        <button class="bg-blue-300" type="submit">Envoyer</button>
            
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endadmin

</x-app-layout>