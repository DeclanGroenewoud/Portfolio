<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-600">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <img class="h-12 w-12" src="https://www.curio.nl/themes/custom/curio/favicon.ico" alt="Curio Logo">
                </div>
                <div class="hidden md:flex ml-10 items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                  <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                  <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
              </div>
              <div class="hidden md:block ml-auto">
                <a href="/login" class="text-sm font-medium text-white hover:text-gray-300">Login</a>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                <a href="about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
              </div>
              <div class="border-t border-gray-700 pt-4 pb-3">
                <a href="/login" class="block px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
              </div>
            </div>
          </div>
        </nav>
      
        <header class="bg-white shadow">
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1  class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
          </div>
        </header>
        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p>{{ $slot }}</p>
          </div>
        </main>
    </div>
    <footer>
        <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8 bg-gray-500 h-16">
            <p class="flex justify-end content-center max-w-7xl">&copy; 2024 Curio</p>
        </div>
    </footer>
</body>
</html>
