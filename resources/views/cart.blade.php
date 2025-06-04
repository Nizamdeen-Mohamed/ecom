@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Your Cart</h1>
    <div class="bg-white rounded-lg shadow p-6 max-w-3xl mx-auto">
        <table class="w-full mb-6">
            <thead>
                <tr class="border-b">
                    <th class="py-2 text-left">Product</th>
                    <th class="py-2 text-center">Quantity</th>
                    <th class="py-2 text-right">Price</th>
                    <th class="py-2 text-right">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-4 flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=facearea&w=64&q=80" alt="Matte Lipstick" class="w-12 h-12 object-contain rounded">
                        <div>
                            <div class="font-semibold">Matte Lipstick</div>
                            <div class="text-xs text-gray-500">TOMORROW</div>
                        </div>
                    </td>
                    <td class="py-4 text-center">
                        <div class="inline-flex items-center border rounded">
                            <button class="px-2 py-1 text-lg">-</button>
                            <span class="px-3">1</span>
                            <button class="px-2 py-1 text-lg">+</button>
                        </div>
                    </td>
                    <td class="py-4 text-right">$12.99</td>
                    <td class="py-4 text-right">$12.99</td>
                </tr>
                <tr>
                    <td class="py-4 flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=facearea&w=64&q=80" alt="Nude Eyeshadow" class="w-12 h-12 object-contain rounded">
                        <div>
                            <div class="font-semibold">Nude Eyeshadow</div>
                            <div class="text-xs text-gray-500">TOMORROW</div>
                        </div>
                    </td>
                    <td class="py-4 text-center">
                        <div class="inline-flex items-center border rounded">
                            <button class="px-2 py-1 text-lg">-</button>
                            <span class="px-3">2</span>
                            <button class="px-2 py-1 text-lg">+</button>
                        </div>
                    </td>
                    <td class="py-4 text-right">$18.99</td>
                    <td class="py-4 text-right">$37.98</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-end items-center mb-4">
            <span class="text-lg font-bold mr-2">Subtotal:</span>
            <span class="text-2xl font-bold">$50.97</span>
        </div>
        <div class="flex justify-end">
            <a href="#" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition font-semibold">Proceed to Checkout</a>
        </div>
    </div>
@endsection 