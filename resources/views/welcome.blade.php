@extends('layouts.app')

@section('content')

{{-- Premium full-width hero banner with two-column layout --}}
<div class="relative w-full h-[700px] overflow-hidden">
    <div class="flex flex-col-reverse md:flex-row h-full">
        {{-- Left Column: Text Content --}}
        <div class="w-full md:w-1/2 flex flex-col justify-center items-start px-8 md:px-16 lg:px-20 bg-white">
        {{-- Inline Pill Tabs --}}
        <div class="flex flex-wrap gap-3 mb-6">
        <a href="#" class="inline-block px-4 py-1.5 text-sm font-medium bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition whitespace-nowrap">🔥 Bestsellers</a>
        <a href="#" class="inline-block px-4 py-1.5 text-sm font-medium bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition whitespace-nowrap">🎁 Gifts Under Rs 3000</a>
        <a href="#" class="inline-block px-4 py-1.5 text-sm font-medium bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition whitespace-nowrap">🌿 Niche Picks</a>
        <a href="#" class="inline-block px-4 py-1.5 text-sm font-medium bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition whitespace-nowrap">🧪 Fragrance Quiz</a>
    </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">Authentic Fragrance Samples</h2>
            <p class="text-base md:text-lg text-gray-700 mb-6 max-w-md">
            Discover new scents or revisit favorites with our carefully curated fragrance samples.
            </p>
        <a href="#" class="bg-black text-white px-8 py-3.5 text-sm font-semibold tracking-wide rounded-sm hover:bg-gray-900 transition duration-300">Explore Samples</a>
    </div>

        {{-- Right Column: Full-height Image --}}
        <div class="w-full md:w-1/2 h-[300px] md:h-full">
            <img src="{{ asset('images/perfume-banner.jpg') }}"
                 alt="Fragrance Banner"
                 class="w-full h-full object-cover">
        </div>
    </div>

    {{-- Navigation Arrows --}}
    <div class="absolute bottom-6 right-6 flex gap-3 z-10">
        <button class="bg-white/60 backdrop-blur-sm rounded-full w-10 h-10 flex items-center justify-center text-black hover:bg-white/80 transition duration-300" aria-label="Previous Slide">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" /></svg>
        </button>
        <button class="bg-white/60 backdrop-blur-sm rounded-full w-10 h-10 flex items-center justify-center text-black hover:bg-white/80 transition duration-300" aria-label="Next Slide">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>
</div>

{{-- Full-width Flash Sale Banner --}}
<div class="mt-4 mx-4 md:mx-8 bg-gradient-to-r from-black to-[#111] text-white py-6 px-4 mb-8 rounded">
    <div class="container mx-auto flex justify-center">
        <strong>Flash Sale!</strong> Up to 70% off select items. <a href="/shop" class="text-white underline hover:text-gray-300 ml-1">Shop Now</a>
    </div>
</div>

{{-- Wrapper for centered content below the banner --}}
<div class="container mx-auto px-4 py-8">

<div class="flex flex-col md:flex-row gap-8 mb-8">
    @include('partials.sidebar-categories')
    {{-- The second column content will go here, below the sidebar on larger screens --}}
    <div class="flex-1 flex flex-col gap-4">
        <!-- Popular Fragrances Section -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Popular Fragrances</h2>
                <a href="#" class="text-sm font-semibold text-black hover:text-gray-700 transition">View all</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                {{-- Example Product Cards --}}
                <x-product-card
                    brand="Clive Christian"
                    name="Blonde Amber"
                    image="{{ asset('images/clive.jpg') }}"
                    price="6,200"
                />
                 <x-product-card
                    brand="Dior"
                    name="Rouge Trafalgar Esprit de Parfum"
                    image="{{ asset('images/dior-rouge-trafalgar.jpg') }}"
                    price="3,700"
                />
                 <x-product-card
                    brand="Creed"
                    name="Aventus"
                    image="{{ asset('images/creed-aventus.jpg') }}"
                    price="2,000"
                />
                 <x-product-card
                    brand="Stephane Humbert Lucas,"
                    name="God Of Fire"
                    image="{{ asset('images/stephane-humbert-lucas-god-of-fire.jpg') }}"
                    price="3,200"
                />
                 <x-product-card
                    brand="Louis Vuitton"
                    name="Elves"
                    image="{{ asset('images/louis-vuitton-elves.jpg') }}"
                    price="2,600"
                />
            </div>
        </div>
    </div>
</div>
</div>

@endsection
