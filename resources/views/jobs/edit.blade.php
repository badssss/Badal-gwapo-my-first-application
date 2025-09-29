<x-layout>
    <x-slot name="heading">
        Edit Job
    </x-slot>

    <div class="max-w-xl mx-auto mt-10 bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-white mb-6">✍️ Edit Job</h2>

        <!-- UPDATE FORM -->
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
            @csrf
            @method('PATCH')

            <div>
                <label for="title" class="block text-lg font-medium text-gray-200">Job Title</label>
                <input type="text" id="title" name="title" 
                       class="w-full mt-2 px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-pink-500 outline-none"
                       value="{{ $job->title }}" required>
                @error('title')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="salary" class="block text-lg font-medium text-gray-200">Salary</label>
                <input type="text" id="salary" name="salary" 
                       class="w-full mt-2 px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-pink-500 outline-none"
                       value="{{ $job->salary }}" required>
                @error('salary')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="px-8 py-3 bg-gradient-to-r from-indigo-500 to-pink-500 text-white font-semibold rounded-full shadow-md hover:scale-105 hover:shadow-lg transform transition duration-300">
                ✏️ Update Job
            </button>
        </form>

        <!-- DELETE FORM -->
        <form method="POST" action="/jobs/{{ $job->id }}" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded-full hover:bg-red-500 transition">
                🗑️ Delete Job
            </button>
        </form>
    </div>
</x-layout>
