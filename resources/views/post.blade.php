<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-5 max-w-screen-md border-b border-gray-500">
        <div>
            <h1 class="font-bold text-3xl">{{ $post->title }}</h1>
        </div>
        <div class="text-base text-gray-600">
            By
            <a href="/author/{{ $post->author->username }}">{{ $post->author->name }} </a>
            |
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}</a>
        </div>
        <div class="my-4">
            <p>{{$post->body }}</p>
        </div>
        <div class="text-blue-400 hover:underline">
            <a href="/posts">&laquo; Back</a>
        </div>
        
    </article>
</x-layout>