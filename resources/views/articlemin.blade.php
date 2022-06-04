<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('article', $article) }}">
        <img class="rounded-t-lg" src="{{ $article->cover }}" alt="">
    </a>
    <div class="p-5">
        <a href="{{ route('article', $article) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ Illuminate\Support\Str::limit($article->body, 100) }}

        </p>
    </div>
</div>
