@extends('app')


@section('title', 'about-me | ' . config('app.name'))
 

@section('content')
    <img class="pb-3 w-1/5" src={{asset('/images/marc.jpg')}} alt="Woman">
    <p>Made with <span class="text-pink-500">&hearts;</span>; by Zicokiller.</p>
    <p><a href={{route('home')}} class="text-indigo-500 hover:text-indigo-700 underline">Revenir à la page d'accueil</a></p>
@endsection
