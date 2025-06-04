@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Shop All Products</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <x-product-card 
            brand="TOMORROW"
            name="Matte Lipstick"
            description="Long-lasting matte color for bold lips."
            image="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=facearea&w=256&q=80"
            price="12.99"
        />
        <x-product-card 
            brand="TOMORROW"
            name="Nude Eyeshadow"
            description="Neutral tones for everyday elegance."
            image="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=facearea&w=256&q=80"
            price="18.99"
        />
        <x-product-card 
            brand="TOMORROW"
            name="Liquid Foundation"
            description="Buildable coverage for radiant skin."
            image="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=facearea&w=256&q=80"
            price="24.99"
        />
        <x-product-card 
            brand="TOMORROW"
            name="Blush Palette"
            description="Versatile shades for all skin tones."
            image="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=facearea&w=256&q=80"
            price="16.99"
        />
        <!-- Add more products as needed -->
    </div>
@endsection 