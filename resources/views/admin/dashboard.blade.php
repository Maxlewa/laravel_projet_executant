<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Vous :</p>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nom : {{ Auth::User()->name }} <br/> Prénom : {{ Auth::User()->prenom }} </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Age : {{ Auth::User()->age }}</h6>
                            <p class="card-text ">Role : {{ Auth::User()->role->nom }} </p>
                            <p>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit">Déconnection</button>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
