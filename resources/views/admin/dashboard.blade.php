@extends('app.app')

@section('title','Admin Dashboard')

@section('content')

    <x-app-layout>
        <div class="max-w-4xl mx-auto py-12 px-6">
            <h1 class="text-3xl font-bold mb-6">Welcome Admin {{ auth()->user()->name }}</h1>
            
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="font-semibold mb-2">Your Details</h2>
                <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Role:</strong> {{ auth()->user()->role }}</p>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded hover:bg-red-800">Logout</button>
            </form>
        </div>
    </x-app-layout>

@endsection