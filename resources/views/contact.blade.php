<!-- resources/views/contact.blade.php -->
<!-- resources/views/contact.blade.php -->

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


        <div class="flex-1 flex items-center justify-center">
            <div class="max-w-3xl p-10 bg-white shadow-lg rounded-md">
                <h1 class="text-4xl font-bold text-red-800 mb-4">Connect with Virat Kohli</h1>

                <p class="text-gray-700 mb-4">
                    Virat Kohli values communication with his fans and supporters. Whether you have a question, an inspiring story to share, or a collaboration proposal, feel free to reach out using the following methods:
                </p>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Email</h2>

                        <p class="text-gray-700 mb-4">
                            For general inquiries, collaborations, or media requests, please contact Virat Kohli's team at:
                        </p>

                        <a href="mailto:sachin@tendulkar.com" class="text-red-500 hover:underline">info@viratkohli</a>
                    </div>

                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Social Media</h2>

                        <p class="text-gray-700 mb-4">
                            Stay updated on Virat  latest news, activities, and inspirational messages by following him on social media:
                        </p>

                        <ul class="list-none mb-4">
                            <li>
                                <a href="https://twitter.com/imVkohli?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="inline-block text-red-500 hover:underline" target="_blank" rel="noopener noreferrer">@imVKohli</a> (Twitter)
                            </li>
                            <li>

                            </li>
                            <li>
                                <a href="https://www.instagram.com/virat.kohli/?hl=en" class="inline-block text-red-500 hover:underline" target="_blank" rel="noopener noreferrer">Virat@Kohli</a> (Instagram)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

