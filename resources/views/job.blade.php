<x-layout>
  <x-slot name="heading">
    Job Details
  </x-slot>

  <div class="max-w-3xl mx-auto px-6 py-16 relative z-10">
    <div class="bg-white/90 backdrop-blur-md shadow-xl rounded-2xl p-10 border border-emerald-200">
      
      <!-- Job Title -->
      <h2 class="text-3xl font-extrabold text-emerald-700 mb-4">
        {{ $job->title }}
      </h2>

      <!-- Employer -->
      <p class="text-lg text-gray-700 mb-2">
        <span class="font-semibold text-emerald-600">{{ $job }}</span>
      </p>

      <!-- Salary -->
      <p class="text-lg mb-4">
        💰 Salary: 
        <span class="font-bold text-emerald-700">${{ $job->salary }} USD</span> per year
      </p>

      <!-- Location (if exists) -->
      @if($job->location)
        <p class="text-md text-gray-600 mb-6">
          📍 Location: {{ $job->location }}
        </p>
      @endif

      <!-- Description -->
      <p class="text-gray-700 leading-relaxed mb-8">
        {{ $job->description ?? "No detailed description available for this position." }}
      </p>

      <!-- CTA Button -->
      <div class="text-center">
        <a href="/jobs" 
           class="inline-block px-6 py-3 bg-emerald-600 text-white font-semibold rounded-full 
                  shadow hover:bg-emerald-700 transition">
          ← Back to Jobs
        </a>
      </div>
    </div>
  </div>
</x-layout>