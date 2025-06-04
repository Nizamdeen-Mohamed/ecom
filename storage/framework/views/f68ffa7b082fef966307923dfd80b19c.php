<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Beautica')); ?></title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>
<body class="bg-white text-black min-h-screen antialiased">
    <!-- Accessibility: Skip to content -->
    <a href="#main-content" class="sr-only focus:not-sr-only bg-black text-white p-2">Skip to main content</a>

    <!-- Top Bar: Premium Black & White with Auto-Rotating Announcement -->
<div class="bg-black text-white text-xs py-2 px-4 flex justify-between items-center">
    <!-- Left: Language/Currency -->
    <div class="flex items-center gap-4">
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="hover:underline focus:outline-none focus:underline" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
                EN
            </button>
            <div x-show="open" @click.away="open = false"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute left-0 mt-2 w-32 bg-white text-black rounded-md shadow-lg z-50 origin-top-left">
                <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100">EN</a>
            </div>
        </div>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="hover:underline focus:outline-none focus:underline" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
                USD
            </button>
            <div x-show="open" @click.away="open = false"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute left-0 mt-2 w-32 bg-white text-black rounded-md shadow-lg z-50 origin-top-left">
                <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100">USD</a>
                <div class="border-t border-gray-200 my-1"></div>
                <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100">EUR</a>
                <a href="#" class="block px-4 py-2 text-xs hover:bg-gray-100">GBP</a>
            </div>
        </div>
    </div>
    <!-- Center: Auto-Rotating Announcement -->
    <div 
    x-data="announcementBar()" 
    x-init="startRotation()" 
    class="bg-black text-white text-sm py-2 px-4 text-center"
    >
    <p 
    :key="messages[currentIndex]" 
    x-text="messages[currentIndex]" 
    class="transition duration-500 ease-in-out animate-bounce"
    ></p>
    </div>


    <!-- Right: Social + Login -->
    <div class="flex items-center gap-4">
        <a href="#" aria-label="Instagram" class="hover:text-gray-300 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
        </a>
        <a href="#" aria-label="Facebook" class="hover:text-gray-300 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
        </a>
        <a href="#" aria-label="Twitter" class="hover:text-gray-300 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
            </svg>
        </a>
        <a href="#" class="hover:underline hover:text-gray-300">Login / Register</a>
    </div>
</div>


    <!-- Header with two rows -->
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <!-- Top Row: Logo, Categories, Search, Quick Icons -->
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        
        <a href="/" class="text-2xl font-bold flex items-center gap-2">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg>
            Scentify
        </a>

        
        <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-black ml-4">
            <a href="/" class="hover:text-gray-600">Home</a>
            <a href="/shop" class="hover:text-gray-600">Shop</a>
            <a href="/about" class="hover:text-gray-600">About</a>
            <a href="/support" class="hover:text-gray-600">Support</a>
        </nav>

        
        <div class="flex-grow pmax-w-xl mx-20 flex items-stretch border rounded-md overflow-hidden h-8">
            <div x-data="{ open: false }" class="relative flex-shrink-0">
                <button @click="open = !open" class="bg-gray-200 px-4 h-full flex items-center text-sm border-r border-gray-300">
                    All
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 bg-white text-black shadow-md rounded w-40 z-50">
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Perfumes</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Samples</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Gifts</a>
                </div>
            </div>
            <input type="text" class="flex-1 px-4 text-sm" placeholder="Search for products">
            <button class="bg-black text-white px-4"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></button>
        </div>

        
        <div class="flex items-center gap-4">
            <a href="#" class="relative hover:text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 4H6a2 2 0 00-2 2v14a2 2 0 002 2h4m4-18h4a2 2 0 012 2v14a2 2 0 01-2 2h-4"/></svg>
                <span class="absolute -top-1 -right-1 bg-black text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
            </a>
            <a href="#" class="relative hover:text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                <span class="absolute -top-1 -right-1 bg-black text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
            </a>
            <a href="#" class="relative hover:text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
                <span class="absolute -top-1 -right-1 bg-black text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
            </a>
            <button class="ml-2 text-gray-700 hover:text-black" aria-label="Theme Toggle">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 3v1m0 16v1m8.66-8.66l-.71-.71M4.34 4.34l-.71-.71m16.97 13.44l-.71-.71M3.05 19.07l-.71-.71M21 12h1M2 12H1"/></svg>
            </button>
        </div>
    </div>
    </header>

    <!-- Main Content -->
    <main id="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t mt-8 py-8 text-center text-white">
        <div class="mb-4 flex flex-wrap justify-center gap-6">
            <a href="#" class="hover:underline">After Sales Service</a>
            <a href="#" class="hover:underline">Purchase Warranty</a>
            <a href="#" class="hover:underline">Privacy Policy</a>
            <a href="#" class="hover:underline">Terms of Service</a>
            <a href="#" class="hover:underline">FAQ</a>
            <a href="#" class="hover:underline">Contact</a>
        </div>
        <div class="mb-4 flex flex-wrap justify-center gap-4 items-center">
            <!-- Trust Badges -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/SSL_logo.svg" alt="SSL Secure" class="h-6 inline">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa" class="h-6 inline">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png" alt="Mastercard" class="h-6 inline">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/PayPal_Logo.png" alt="PayPal" class="h-6 inline">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Google_Pay_Logo.svg" alt="Google Pay" class="h-6 inline">
        </div>
        <div class="mb-4">
            <span class="font-semibold">Live Chat/Support coming soon!</span>
        </div>
        <div class="text-xs text-gray-400">
            &copy; <?php echo e(date('Y')); ?> Beautica. All rights reserved.
        </div>
    </footer>
</body>
<script>
function announcementBar() {
    return {
        messages: [
            '🚚 Free Shipping on Orders Over Rs 5,000',
            '✨ Get 10% off your first order with code SCENTIFY10'
        ],
        currentIndex: 0,
        startRotation() {
            setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.messages.length;
            }, 5000); // Change message every 3 seconds
        }
    }
}
</script>
</html> <?php /**PATH C:\projects\nneenen\beautica\resources\views/layouts/app.blade.php ENDPATH**/ ?>