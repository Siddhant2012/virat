<!-- resources/views/details.blade.php -->

@extends('layouts.app')

@section('appContents')
<div class="min-h-screen bg-g ray-100 flex flex-col">

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
        <h1 class="text-4xl font-bold text-red-800 mb-4">Virat Kohli - Key Details</h1>

        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/3 mr-8">
            <img src="{{ asset('images/Virat_Kohli_RCB_vs_GT_Chinnaswamy_BCCI-1200x1200.webp.jpg') }}" alt="Sachin Tendulkar Profile Image" class="object-cover w-full h-64 rounded-md shadow-lg">
          </div>

          <div class="md:w-2/3">
            <ul class="list-disc pl-6 text-gray-700">
              <li><strong>Full Name:</strong> Virat Kohli</li>
              <li><strong>Date of Birth:</strong>November 5, 1988</li>
              <li><strong>Place of Birth:</strong>Delhi, India</li>
              <li><strong>Nationality:</strong> Indian</li>
              <li><strong>Role:</strong> Right-handed Batsman</li>

              <li><strong>Debut:</strong>August 18, 2008, in a One Day International (ODI) match against Sri Lanka</li>

            </ul>
          </div>
        </div>

        <div class="mt-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Notable Records and Achievements</h2>

          <ul class="list-disc pl-6 text-gray-700">
            <li>Fastest to Reach 8,000, 9,000, 10,000, and 11,000 Runs in ODIs.</li>
            <li>Fastest Century by an Indian Batsman in ODIs.</li>
            <li>Most Runs in a Calendar Year in Tests.</li>
            <li>ICC Awards - Sir Garfield Sobers Trophy.</li>
            <li>received the Arjuna Award, a prestigious sports award in India, in recognition of his achievements in cricket.</li>
            <li>He has been honored with the Padma Shri, one of the highest civilian awards in India.</li>
            <li>Rajiv Gandhi Khel Ratna,India's highest sporting honor awarded to Kohli for his exceptional contributions to cricket.</li>



          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection

