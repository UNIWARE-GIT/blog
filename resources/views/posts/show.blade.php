<x-app-layout>
    <div class="container mt-12 py-8">
        <h1 class="text-4xl font-bold text-gray-700">
            {{ $post->name }}
        </h1>
        <div class="text-lg text-gray-600 my-2">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                        alt="">
                </figure>
                <div class="text-base text-gray-600 my-2 text-justify">
                    {{ $post->body }}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl text-gray-500 font-bold mb-4">Similares: {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="my-2">
                            <a href="{{route('posts.show', $similar)}}" class="flex">
                                <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="" />
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="my-4">
                    {{$similares->links()}}
                </div>
            </aside>
        </div>
    </div>
</x-app-layout>

