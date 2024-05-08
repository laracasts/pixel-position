<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
