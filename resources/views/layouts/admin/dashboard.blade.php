@extends('layouts.app')

@section('title','Admin Dashboard')

@section('content')
    
    <div class="max-w-4xl mx-auto py-12 px-6">
        <h1 class="text-4xl font-bold mb-6">Welcome Admin {{ auth()->user()->firstname }}!</h1>
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded m-4">
                Logout
            </button>
        </form>
        
        <div class="bg-blue-200 p-6 rounded-lg shadow mb-6">
            <h2 class="font-bold text-3xl  mb-3">My Profile</h2>
            <p><strong>Full Name:</strong> {{ auth()->user()->firstname }} {{ auth()->user()->lastname}}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Role:</strong> {{ auth()->user()->role }}</p>
        </div>
    </div>
    
@endsection