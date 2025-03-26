@extends('layouts.app')


@section('page')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center mt-8">Welcome to Lardock</h1>
        <p class="text-center mt-4">A Laravel and Docker development environment</p>
        <div class="flex justify-center mt-8">
            <a href="{{route('login')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</a>
            <a href="{{route('register')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-4">Register</a>
        </div>
    </div>
    
@endsection