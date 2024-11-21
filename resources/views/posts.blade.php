<x-layout>
  <x-slot:heading>
    Posts Page
  </x-slot:heading>
  <ul>
    @foreach ($posts as $post)
      <li><strong>{{$post['title']}}</strong></li>
      <li class="mb-4 italic">{{$post['content']}}</li>
      <li class="p-4 mb-4 bg-red-300 text-center rounded-lg hover:bg-red-600 font-bold">
        <a href="/posts/{{$post['id']}}">
          Comments
        </a>
      </li>
    @endforeach
  </ul>
</x-layout>