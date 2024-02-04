<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white mx-auto py-5 w-[30%]">
            <h1 class="w-[70%] mx-auto font-bold" >Bienvenue!</h1>
            <p class="w-[70%] mx-auto" >Nom : {{$utilisateur->name}}</p>
            <p class="w-[70%] mx-auto" >Courriel : {{$utilisateur->email}}</p>
            <p class="w-[70%] mx-auto" >Points : {{$utilisateur->points}}</p>
            <p class="w-[70%] mx-auto" >Date crée : {{$utilisateur->created_at}}</p>
        </div>
    </div>
</x-app-layout>
