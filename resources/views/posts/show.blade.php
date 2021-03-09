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
                    @if ($post->image)
                        <img class="w-full h-72 object-cover object-center"
                            src="{{ Storage::url($post->image->url) }}" alt="" />
                    @else
                        <img class="w-full h-72 object-cover object-center"
                            src="https://crnnoticias.com/wp-content/uploads/2017/03/1-108.jpg" alt="" />
                    @endif
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
                            <a href="{{ route('posts.show', $similar) }}" class="flex">
                                @if ($similar->image)
                                    <img class="w-full h-72 object-cover object-center"
                                        src="{{ Storage::url($post->image->url) }}" alt="" />
                                @else
                                    <img class="w-full h-72 object-cover object-center"
                                        src="https://crnnoticias.com/wp-content/uploads/2017/03/1-108.jpg" alt="" />
                                @endif
                                <span class="ml-2 text-gray-600">{{ $similar->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="my-4">
                    {{ $similares->links() }}
                </div>
            </aside>
        </div>
    </div>
</x-app-layout>
