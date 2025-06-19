<x-layout>
    <x-slot:heading>
        Employers
    </x-slot:heading>
    @foreach ($employers as $employer)
        <ul>
            <li>
               <a href="/employers/{{$employer['id']}}" >
               <strong class="hover:text-blue-600 hover:underline"> {{ $employer['id'] }} </strong> : {{ $employer['name'] }}
                </a>
            </li>
        </ul>
    @endforeach
</x-layout>
