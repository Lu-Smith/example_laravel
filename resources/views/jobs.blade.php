<x-layout>
  <x-slot:heading>
    Jobs Page
  </x-slot:heading>
  @foreach ($jobs as $job)
    <li>
        <strong>{{ $job['title'] }}</strong>
        - pays {{ $job['salary']}}
    </li>
  @endforeach
</x-layout>