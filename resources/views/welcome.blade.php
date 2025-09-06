@extends('app.app')

@section('title','Home')

@section('content')
    <section class="bg-gray-100 text-center py-20">
    <h1 class="text-5xl font-bold text-gray-900">Welcome to MyApp</h1>
    <p class="mt-4 text-lg text-gray-600">Build fast, secure apps with Laravel & Tailwind</p>
    <a href="/register" class="mt-6 inline-block px-8 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
        Get Started
    </a>
</section>

<section class="py-16 max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10">Features</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="p-6 bg-white rounded-lg shadow text-center">
            <h3 class="text-xl font-semibold mb-4">Fast</h3>
            <p>Optimized with Laravel 10 and Tailwind CSS.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow text-center">
            <h3 class="text-xl font-semibold mb-4">Secure</h3>
            <p>Role-based authentication system.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow text-center">
            <h3 class="text-xl font-semibold mb-4">Responsive</h3>
            <p>Looks great on mobile, tablet, and desktop.</p>
        </div>
    </div>
</section>


<section class="py-16 bg-gray-50">
    <h2 class="text-3xl font-bold text-center mb-10">What Users Say</h2>
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8 px-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <p>"This app is amazing, I love the clean UI!"</p>
            <span class="block mt-4 font-semibold">- John Doe</span>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>"Perfect for learning Laravel + Tailwind."</p>
            <span class="block mt-4 font-semibold">- Jane Smith</span>
        </div>
    </div>
</section>


<footer class="bg-gray-800 text-white py-6 text-center">
    <div class="space-x-6">
        <a href="/" class="hover:text-blue-400">Home</a>
        <a href="/login" class="hover:text-blue-400">Login</a>
        <a href="/register" class="hover:text-blue-400">Register</a>
    </div>
    <p class="mt-4">&copy; {{ date('Y') }} MyApp. All rights reserved.</p>
</footer>

    <h1 class="text-center text-amber-600 font-extrabold"> This is first</h1>
@endsection