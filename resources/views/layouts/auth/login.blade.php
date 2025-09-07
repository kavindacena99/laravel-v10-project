@extends('layouts.app')

@section('title','Login')

@section('content')
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
                <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

                @if($errors->any())
                    <div class="mb-4 text-red-600">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="">
                    @csrf
                    <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-4 border rounded" required>
                    <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded" required>
                    
                    <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Login</button>
                </form>

                <p class="mt-4 text-center">
                    Don't have an account? <a href="{{ route('signup') }}" class="text-blue-600 hover:underline">Register</a>
                </p>
            </div>
        </div>
@endsection