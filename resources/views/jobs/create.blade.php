<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <div class="max-w-xl mx-auto mt-10 bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-white mb-6">✍️ Create a New Job</h2>

        <form method="POST" action="/jobs" class="space-y-6">
            @csrf

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-lg font-medium text-gray-200">Job Title</label>
                <input type="text" id="title" name="title" 
                       class="w-full mt-2 px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-pink-500 outline-none"
                       placeholder="Enter job title">
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-lg font-medium text-gray-200">Salary</label>
                <input type="text" id="salary" name="salary" 
                       class="w-full mt-2 px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-pink-500 outline-none"
                       placeholder="Enter salary (e.g. $50,000)">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                        class="px-8 py-3 bg-gradient-to-r from-indigo-500 to-pink-500 text-white font-semibold rounded-full shadow-md hover:scale-105 hover:shadow-lg transform transition duration-300">
                    🚀 Save Job
                </button>
            </div>
        </form>
    </div>
</x-layout>
