@extends('layouts.app')

@section('content')
<div class="article-bg">
    <main class="body-width mb-10 p-8 sm:responsive-width">
        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="h-3/5">
            <img src="{{ '/img/crafting.jpg' }}" alt="article_img" class="flex flex-col justify-center items-center h-3/5">
        </div>

        @foreach ($article as $info)
            <div class="description">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="leading-normal warm-red">{{ $info->date }}</p>
                        <h4 class="leading-normal font-semibold">{{ $info->title }}</h4>
                        <p class="leading-normal italic">Written by {{ $info->author }}</p>
                    </div>
                    @auth
                        <a href="/articles/{article}/edit" class=" hover:underline">Edit</a>
                    @endauth
                </div>
                <br>
                <p class="leading-normal">{{ $info->body }}</p>
            </div>
        @endforeach
    </main>
</div>
<div class="comment_section body-width mb-10 p-8 sm:responsive-width">
    <h3 class="leading-normal font-bold">Comments</h3>
</div>
    
@endsection