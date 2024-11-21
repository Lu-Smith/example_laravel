<x-layout>
  <x-slot:heading>
    Comment Page
  </x-slot:heading>
  <h2> {{ $post['title' ]}}</h2>
  <ul>
    @foreach ($comments as $comment )
      <li>{{ $comment['date'] }}</li>
      <li>{{ $comment['content'] }}</li>
    @endforeach
  </ul>
</x-layout>