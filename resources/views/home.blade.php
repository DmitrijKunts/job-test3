@extends('layer')

@section('content')
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Главная</h5>

    <div class="grid grid-rows-4 grid-flow-col gap-4">
        @foreach ($articles as $article)
            @include('articlemin')
        @endforeach
    </div>
@endsection
