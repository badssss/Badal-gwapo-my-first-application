<x-layout>
<x-slot:headings>
Jobs Page
</x-slot:headings>
<ul>
@foreach ($jobs as $job)
<li>
<a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
<strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
</a>
</li>
@endforeach
</ul>
</x-layout>