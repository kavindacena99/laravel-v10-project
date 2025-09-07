@extends('layouts.app')

@section('title','Sign Up')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>

            @if($errors->any())
                <div class="mb-4 text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('signup') }}">
                @csrf
                <input type="text" name="firstname" placeholder="First Name" class="w-full p-2 mb-4 border rounded" required>
                <input type="text" name="lastname" placeholder="Last Name" class="w-full p-2 mb-4 border rounded" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-4 border rounded" required>
                <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-2 mb-4 border rounded" required>
                
                <select name="role" class="w-full p-2 mb-4 border rounded" required>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>

                <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Register</button>
            </form>

            <p class="mt-4 text-center">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
            </p>
        </div>
    </div>

@endsection