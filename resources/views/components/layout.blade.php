<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-gray-50 text-gray-900 font-sans">

  <!-- NAVBAR -->
  <header class="bg-white/80 backdrop-blur-md shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 tracking-tight">
        MyLaravelApp
      </h1>

      <nav class="hidden md:block">
        <ul class="flex space-x-6 text-lg font-medium">
          <x-nav-link href="/" :active="request()->is('/')" class="hover:text-blue-600 transition-colors">Home</x-nav-link>
          <x-nav-link href="/jobs" :active="request()->is('jobs')" class="hover:text-blue-600 transition-colors">Jobs</x-nav-link>
        </ul>
      </nav>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="relative text-center py-24 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white overflow-hidden">
    
    <!-- Background decoration -->
    <div class="absolute inset-0">
      <div class="absolute top-20 left-1/3 w-96 h-96 bg-pink-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
      <div class="absolute bottom-20 right-1/4 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
      <div class="absolute top-40 right-1/3 w-96 h-96 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10">
      <h1 class="max-w-3xl mx-auto text-5xl font-extrabold tracking-tight drop-shadow-2xl leading-tight">
        {{ $heading ?? '' }}
      </h1>
      <p class="max-w-2xl mx-auto mt-6 text-lg opacity-90 leading-relaxed">
        {{ $slot }}
      </p>

      @if (request()->is('/'))
      <a href="/jobs" 
         class="inline-block mt-8 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold px-10 py-4 rounded-full shadow-2xl hover:scale-105 hover:shadow-lg transform transition duration-300">
        🚀 Explore Jobs
      </a>
      @endif
    </div>
  </section>

</body>
</html>
