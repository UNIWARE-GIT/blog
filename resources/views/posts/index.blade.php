<x-app-layout>
    <div class="container mt-12 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center rounded-lg @if ($loop->first) md:col-span-2 @endif @if ($loop->last) lg:col-span-3 md:col-span-2 sm:col-span-1 @endif" style="background-image: url({{Storage::url($post->image->url)}}); opacity: 0.9;">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag', $tag)}}" class="inline-block mb-2 px-3 h-6 bg-gray-800 text-white rounded">#{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="my-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>


