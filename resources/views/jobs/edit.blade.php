<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <div class="max-w-xl mx-auto mt-10 bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-white mb-6">✍️ Edit Job</h2>

        <!-- UPDATE FORM -->
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
            @csrf
            @method('PATCH') <!-- Matches your PATCH route -->

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-lg font-medium text-gray-200">Job Title</label>
                <input type="text" id="title" name="title" 
                       value="{{ old('title', $job->title) }}"
                       class="w-full mt-2 px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-pink-500 outline-none"
                       placeholder="Enter job title">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-lg font-medium text-gray-200">Salary</label>
                <input type="text" id="salary" name="salary" 
                       value="{{ old('salary', $job->salary) }}"
                       class="w-full mt-2 px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-pink-500 outline-none"
                       placeholder="Enter salary (e.g. $50,000)">
                @error('salary')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Update Button -->
            <div class="flex justify-center space-x-4">
                <button type="submit"
                        class="px-8 py-3 bg-gradient-to-r from-indigo-500 to-pink-500 text-white font-semibold rounded-full shadow-md hover:scale-105 hover:shadow-lg transform transition duration-300">
                    💾 Update Job
                </button>
            </div>
        </form>

        <!-- DELETE BUTTON -->
        <div class="flex justify-center mt-4">
            <button type="submit" form="delete-form"
                    class="px-8 py-3 bg-red-600 text-white font-semibold rounded-full shadow-md hover:scale-105 hover:shadow-lg transform transition duration-300">
                🗑️ Delete Job
            </button>
        </div>

        <!-- HIDDEN DELETE FORM -->
        <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
