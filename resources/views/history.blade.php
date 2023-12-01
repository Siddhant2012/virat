<!-- resources/views/history.blade.php -->

@extends('layouts.app')

@section('appContents')
<div class="bg-gray-100 min-h-screen flex flex-col">

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
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-7xl p-8 bg-white shadow-lg rounded-md">
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-red-800 mb-4">A Chronicle of Virat Kohli's Cricket Journey</h1>

                <p class="text-gray-700 mb-4">Virat Kohli's cricket journey is an epic tale of unwavering passion, exceptional talent, and unparalleled achievements. His remarkable career, spanning over two decades, has left an indelible mark on the sport, inspiring generations of cricket enthusiasts worldwide.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Days and Auspicious Beginnings</h2>

                <p class="text-gray-700 mb-4"> Born on November 5, 1988, in Delhi, India, Kohli's journey from a young, aspiring cricketer to one of the most prolific batsmen in the world has been nothing short of extraordinary.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">A Decade of Dominance and Record-Breaking Achievements</h2>

                <p class="text-gray-700 mb-4">Kohli's rise to prominence wasn't just about statistics; it was a narrative of consistency, adaptability, and a relentless pursuit of excellence. His ability to perform under pressure and lead from the front became the hallmark of his batting prowess.</p>


                <ul class="list-disc mb-4">
                    <li>Kohli was conferred with the Arjuna Award, which is given by the Ministry of Youth Affairs and Sports in India, recognizing outstanding achievement in sports.</li>
                    <li>Virat Kohli has multiple Test double centuries, setting a record for an Indian captain.</li>
                    <li>Fastest Batsman to Score 8,000, 9,000, 10,000, and 11,000 International Runs.</li>
                    <li>Kohli has set records for the most runs in a calendar year when combining performances in Tests, ODIs, and T20Is.</li>
                    <li>Kohli has been awarded the Sir Garfield Sobers Trophy for the ICC Cricketer of the Year multiple times.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">A Continued Legacy of Excellence and Inspiration</h2>

                <p class="text-gray-700 mb-4">Kohli's ability to consistently perform at the highest level across all formats of the game sets him apart. His hunger for runs and dedication to maintaining a high standard of play season after season showcase a level of consistency that aspiring cricketers can only admire and strive to emulate.</p>


                <ul class="list-disc mb-4">
                    <li>As the captain of the Indian Test team, Kohli led India to historic series victories, including the first-ever Test series win in Australia during the 2018-2019 season.</li>
                    <li>Kohli played a crucial role in promoting a culture of fitness within the Indian team. His commitment to fitness and demanding training routines influenced the entire squad.


