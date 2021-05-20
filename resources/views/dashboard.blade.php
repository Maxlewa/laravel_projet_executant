<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 text-green-600 bg-green-100">
                    <b>You're logged in!</b>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>YOU</b></p>
                    <br>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nom : {{ Auth::User()->name }} <br/> Prénom : {{ Auth::User()->prenom }} </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Age : {{ Auth::User()->age }} ans</h6>
                            <h6 class="card-text ">Rôle : {{ Auth::User()->role->nom }}</h6>
                            <br>
                            <img src={{asset('img/' . Auth::User()->avatar->nom . '.png')}} alt="">
                            <a href={{route('avatarDownload', Auth::User()->avatar->id)}}>
                                <button class="bg-green-700">Download</button>
                            </a>
                            <br>
                            <div class="flex">
                                <p>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Déconnection</button>
                                    </form>
                                </p>
                                @admin
                                    <a href="{{route('userEdit', Auth::id())}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Edit</button></a>
                                @endadmin
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @admin
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>ALL USERS</b></p>
                    <br>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            @foreach ($users as $user)
                                <h5 class="card-title">Nom : {{ $user->name }} <br/> Prénom : {{ $user->prenom }} </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Age : {{ $user->age }} ans</h6>
                                <h6 class="card-text ">Rôle : {{ $user->role->nom }}</h6>
                                <br>
                                <img src={{asset('img/' . $user->avatar->nom . '.png')}} alt="">
                                <a href="{{route('userEdit', Auth::id())}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button></a>
                                <hr class="mt-4">
                                <br>
                            @endforeach
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endadmin

</x-app-layout>
