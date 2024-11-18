<x-layout>
  <x-slot:heading>
    Jobs Page
  </x-slot:heading>
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="/jobs/">
          <strong>{{ $job['title'] }}</strong>
          - pays {{ $job['salary']}}
        </a>
      </li>
    @endforeach
  </ul>
</x-layout>