
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
 
</head>
<body class="antialiased bg-gray-50 text-gray-900">

  <!-- NAVBAR -->
  <header class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">MyLaravelApp</h1>

      <nav class="hidden md:block">
        <ul class="flex space-x-6 text-lg font-medium">       
        <x-nav-link href="/" :active="request()->is('/')"  class="hover:text-blue-600">Home</x-nav-link>
<x-nav-link href="/jobs" :active="request()->is('jobs')"  class="hover:text-blue-600">Jobs</x-nav-link>
      </nav>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="text-center py-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
   <h1 class="max-w-2xl mx-auto text-lg" >
    {{ $headings }}</h1>
   
    <h1 class="max-w-2xl mx-auto text-lg" >
    {{ $slot }}    </h1>
 
    <a href="/about" 
       class="inline-block mt-6 px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-md hover:bg-gray-100 transition">
       Learn More
    </a>
  </section>

</body>
</html>