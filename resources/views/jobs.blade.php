<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach ($jobs as $job)
        <ul>
            <li>
               <a href="/jobs/{{$job['id']}}" >
               <strong class="hover:text-blue-600 hover:underline"> {{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per Year.
                </a>
            </li>
        </ul>
    @endforeach
</x-layout>
