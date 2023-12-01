<!-- resources/views/about.blade.php -->

@extends('layouts.app')

@section('appContents')
<div class="bg-gray-100 min-h-screen flex flex-col">

    <header class="bg-red-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">

            <a href="{{ route('home') }}" class="text-xl-red font-bold">Virat Kohli</a>

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

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-7xl p-8 bg-white shadow-lg rounded-md">
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-red-800 mb-4">About Virat Kohli</h1>

                <p class="text-gray-700 mb-4">Virat Kohli is an Indian international cricketer who is widely regarded as one of the best batsmen in the world. His exceptional talent, unwavering dedication, and remarkable achievements have earned him the respect and admiration of cricket enthusiasts worldwide. </p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Years and Cricket Debut</h2>

                <p class="text-gray-700 mb-4">Virat Kohli was born on November 5, 1988, in Delhi, India, into a middle-class Punjabi family.From a young age, Kohli displayed a keen interest in cricket, and his family recognized and supported his passion.Kohli's performances in age-group cricket caught the attention of selectors, leading to his inclusion in the India Under-19 team.Virat Kohli made his international debut for India in an One Day International (ODI) against Sri Lanka on August 18, 2008, in Dambulla, Sri Lanka.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Unparalleled Achievements and Records</h2>

                <p class="text-gray-700 mb-4">Virat Kohli has achieved numerous records and accolades throughout his cricketing career.Kohli holds the record for the most ODI runs in a calendar year by an Indian batsmanHe achieved the fastest century by an Indian in ODIs, reaching the milestone in a remarkably quick time.</p>

                <ul class="list-disc mb-4">
                    <li>Fastest to Reach 8,000, 9,000, 10,000, and 11,000 Test Runs.</li>
                    <li>Fastest to 2,000, 3,000, 4,000, and 5,000 Runs in T20Is.</li>
                    <li>Kohli received the Arjuna Award, a prestigious sports award in India, in recognition of his achievements in cricket.</li>
                    <li>He has been honored with the Padma Shri, one of the highest civilian awards in India.</li>
                    <li>Rajiv Gandhi Khel Ratna,India's highest sporting honor awarded to Kohli for his exceptional contributions to cricket.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Beyond Cricket: Philanthropy and Inspiration</h2>

                <p class="text-gray-700 mb-4">Virat Kohli's impact extends far beyond the cricket field.Beyond his incredible achievements on the cricket field, Virat Kohli has been actively involved in philanthropy and has emerged as a source of inspiration for many. He is a role model for millions around the world, inspiring young people with his dedication, humility, and philanthropic endeavors.</p>

                <ul class="list-disc mb-4">
                    <li>Virat Kohli, along with his actress-wife Anushka Sharma, established the Virat Kohli Foundation in 2013,that aims to provide support to underprivileged children, particularly in the areas of education and healthcare.</li>
                    <li>Kohli is known for his dedication to fitness and has played a significant role in promoting a fitness culture in India, especially in the realm of cricket.</li>
                    <li>He has launched his own wellness brand called "Wrogn," which focuses on promoting an active and healthy lifestyle.</li>
                    <li>Kohli has used his platform to raise awareness about environmental issues and has spoken out on the need for sustainable practices.</li>
                    <li>He and Anushka Sharma have advocated for animal welfare and have supported causes related to the well-being of animals.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection


