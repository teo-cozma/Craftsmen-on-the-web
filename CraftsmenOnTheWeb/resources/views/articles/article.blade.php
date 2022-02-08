@extends('layouts.app')

@section('content')
<div class="article-bg">
    <main class="body-width mb-10 py-8 sm:responsive-width">
        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div>
            @if ($article->image)
                <img src="{{ asset ('img/' . $article->image )}}" alt="article_img" class="flex flex-col justify-center items-center article_image">
            @endif
        </div>
        <div class="description">
            <div class="flex justify-between items-center">
                <div>
                    <p class="leading-normal warm-red">{{ $article->date }}</p>
                    <h4 class="leading-normal font-semibold">{{ $article->title }}</h4>
                    <p class="leading-normal italic">Written by {{ $article->author }}</p>
                </div>
                @if($article->author == Auth::user()->profile->Alias || $article->author == Auth::user()->name)
                    <a href="/article/{{ $article->title }}/edit" class=" hover:underline">Edit</a>
                @endif
            </div>
            <br>
            <p class="leading-normal">{{ $article->body }}</p>
        </div>
    </main>
</div>
<div class="comment_section body-width mb-10 py-8 sm:responsive-width">
    <h3 class="leading-normal font-bold">Comments</h3>
</div>
    
@endsection