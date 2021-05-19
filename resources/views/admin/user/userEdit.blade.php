<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('userUpdate', $user) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
            </div>


            <!-- Prénom -->
            <div class="mt-4">
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" value="{{$user->prenom}}"  required autofocus />
            </div>


            <!-- Age -->
            <div class="mt-4">
                <x-label for="age" :value="__('age')" />

                <x-input id="age" class="block mt-1 w-full" type="number" min="1" max="110" name="age" value="{{$user->age}}"   required autofocus />
            </div>
            
            <!-- Avatar -->
            <div class="mt-4">
                <x-label for="avatar_id" :value="__('Avatar')" />
                
                <select id="avatar_id" class="block mt-1 w-full ml-1" name="avatar_id" :value="old('avatar_id')">
                    @foreach ($avatars as $avatar)
                    <option value="{{$avatar->id}}">{{$avatar->nom}}</option>
                    @endforeach
                </select>
                
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}"  required />
            </div>

            @admin
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            @endadmin

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>