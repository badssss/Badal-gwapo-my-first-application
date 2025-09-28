<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <!-- Centered Create Job Button -->
    <div class="flex justify-center mb-8">
        <a href="/jobs/create"
           class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white px-6 py-3 rounded-full shadow-md hover:scale-105 hover:shadow-lg transform transition duration-300 font-semibold">
           + Create Job
        </a>
    </div>

    <!-- Job Listings -->
    <div class="space-y-6 max-w-2xl mx-auto">
        @foreach ($jobs as $job)
            <div class="border border-white/30 bg-white/10 backdrop-blur-md p-6 rounded-lg shadow-sm hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-white">{{ $job->title }}</h2>
                <p class="text-lg text-gray-200 mt-2">💰 {{ $job->salary }}</p>
                <a href="/jobs/{{ $job->id }}" 
                   class="inline-block mt-3 text-pink-200 font-medium hover:text-white hover:underline">
                   View Details →
                </a>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8 text-white">
        {{ $jobs->links() }}
    </div>
</x-layout>
