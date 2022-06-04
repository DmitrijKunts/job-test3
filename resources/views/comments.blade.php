<div class="m-4">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        Комментарии
    </h5>
    @forelse ($article->articleComments as $articleComments)
        <div
            class="block p-6 max-w-full bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $articleComments->subject }}
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $articleComments->body }}
            </p>
        </div>
    @empty
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Нет комментариев
        </h5>
    @endforelse
    <form name="add_comment">
        @csrf
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Комментировать
        </h5>
        <div class="mb-6">
            <label for="subject" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Тема</label>
            <input value="{{ old('subject') }}" type="text" id="subject" name="subject"
                class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500">
            <p id="subject_error" class="mt-2 text-sm text-red-600 dark:text-red-500">
            </p>

        </div>

        <div class="mb-6">
            <label for="body" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Тема</label>
            <textarea rows="4" id="body" name="body"
                class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"></textarea>
            <p id="body_error" class="mt-2 text-sm text-red-600 dark:text-red-500">
            </p>

        </div>

        <button type="button"
            onclick="addComment('{{ route('article.addcomment', $article) }}', new FormData(document.forms.add_comment))"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Комментировать
        </button>
    </form>
</div>
