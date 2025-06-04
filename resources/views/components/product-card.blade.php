<div {{ $attributes->merge(['class' => 'bg-white rounded-lg overflow-hidden']) }}>
    <img src="{{ $image }}" alt="{{ $name }} Image" class="w-full h-48 object-cover">
    <div class="p-4 text-left">
        <p class="text-sm text-gray-500">{{ $brand }}</p>
        <h3 class="text-base font-semibold text-gray-900 mt-1">{{ $name }}</h3>
        {{-- Description removed as per user's visual --}}
        {{-- <p class="text-gray-700 text-sm mt-1">{{ $description }}</p> --}}
        <p class="text-gray-900 font-bold mt-2">from Rs {{ $price }}<sup>00</sup></p>
        {{-- Button removed as per user's visual --}}
        {{-- <a href="#" class="mt-4 inline-block bg-blue-500 text-white text-sm px-4 py-2 rounded">View Details</a> --}}
    </div>
</div>
