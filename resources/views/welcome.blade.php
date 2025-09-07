@extends('app.app')

@section('title','Home')

@section('content')
    <section class="bg-gray-100 text-center py-20">
        <h1 class="text-5xl font-bold text-gray-900">Role-Based Authentication System</h1>
        <p class="mt-4 text-lg text-gray-600">Using Laravel and Tailwind CSS</p>
        <a href="/login" class="mt-6 inline-block px-8 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
            Login to the System
        </a>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10">Features</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg shadow text-center">
                <h3 class="text-xl font-semibold mb-4">Admin Dashboard</h3>
                <p>View Admin Details and Update</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow text-center">
                <h3 class="text-xl font-semibold mb-4">User Dashboard</h3>
                <p>View User Details and Update</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow text-center">
                <h3 class="text-xl font-semibold mb-4">Profile</h3>
                <p>View User and Admin Profiles</p>
            </div>
        </div>
    </section>


    <footer class="bg-gray-800 text-white py-6 text-center">
        <div class="space-x-6">
            <a href="/" class="hover:text-blue-400">Home</a>
            <a href="/login" class="hover:text-blue-400">Login</a>
            <a href="/signup" class="hover:text-blue-400">Register</a>
        </div>
        <p class="mt-4">&copy; {{ date('Y') }} Role-Based Authentication System. All rights reserved.</p>
    </footer>

@endsection