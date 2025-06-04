<button {{ $attributes->merge(['type' => $type ?? 'button', 'class' => 'px-4 py-2 bg-black-600 text-white rounded hover:bg-red-700 transition']) }}>
    {{ $slot }}
</button> 