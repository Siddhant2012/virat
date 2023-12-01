<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('appContents')
    <div class="min-h-screen bg-gray-100 flex flex-col">

        <header class="bg-red-500 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">

                <a href="{{ route('home') }}" class="text-xl font-bold">Virat Kohli</a>


                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                        <li><a href="{{ route('history') }}" class="hover:underline">History</a></li>
                        <li><a href="{{ route('details') }}" class="hover:underline">Details</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <div class="bg-gray-100 flex justify-center items-center">
            <div class="w-full max-w-3xl p-8 bg-white shadow-lg rounded-md">
                <div class="mb-8">
                    <img src="{{ asset('images/kohli-ipl-pti-1094167-1648092711.jpg') }}" alt="Sachin Tendulkar - The Master Blaster" class="object-cover w-full h-64 rounded-md shadow-lg">
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-red-800 mb-4">Welcome to Virat Kohli's Website</h1>

                    <p class="text-gray-700 mb-4 text-center">Explore the incredible journey of Virat Kohli's , who has made significant contributions to the sport.</p>

                    <p class="text-gray-700 mb-4 text-center">Born on November 5, 1988, in Delhi, India, Kohli's journey in cricket is marked by remarkable achievements and milestones.</p>

                    <p class="text-gray-700 mb-4 text-center">This website is a tribute to the Master Blaster, providing insights into his life, career milestones, and the impact he has had on the world of cricket.</p>

                    <a href="{{ route('about') }}" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded-md transition duration-300">Learn More</a>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Years</h2>

                        <p class="text-gray-700 mb-4">Virat Kohli showed promise from a young age and played for the Delhi Under-15 team..</p>

                        <p class="text-gray-700 mb-4">He captained the India Under-19 team to victory in the 2008 ICC Under-19 Cricket World Cup.</p>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">International Career</h2>

                        <p class="text-gray-700 mb-4">Kohli made his international debut for India in August 2008 in an ODI against Sri Lanka.</p>

                        <p class="text-gray-700 mb-4">He made his Test debut in 2011 against West Indies.</p>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Achievements</h2>

                        <p class="text-gray-700 mb-4">Kohli has numerous records to his name, including being the fastest player to reach 8,000, 9,000, 10,000, and 11,000 runs in One Day Internationals (ODIs).</p>

                        <p class="text-gray-700 mb-4">He has been named the ICC Cricketer of the Year multiple times.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


