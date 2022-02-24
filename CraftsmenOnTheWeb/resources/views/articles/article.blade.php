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
            {{-- Default article image for Heroku --}}
            {{-- <img src="{{ '\static\pexels-ono-kosuki-5973883.jpg' }}" alt="article_img" class="flex flex-col justify-center items-center article_image_home"> --}}

            @if ($article->image)
            <img src="{{ asset ('storage/production/' . $article->image )}}" alt="article_img" class="flex flex-col justify-center items-center article_image">
                {{-- <img src="{{ 'storage/production/' . $article->image }}" alt="article_img" class="flex flex-col justify-center items-center article_image"> --}}
                {{-- <p>{{$article->image}}</p> --}}
                {{-- <img src="/img/{{ $article->image }}" alt="article_img" class="flex flex-col justify-center items-center article_image"> --}}
                {{-- <img src="/storage/production/{{ $article->image }}" alt="article_img" class="flex flex-col justify-center items-center article_image"> --}}
            @endif
        </div>
        <div class="description">
            <div class="flex justify-between items-center">
                <div>
                    <p class="leading-normal warm-red">{{ $article->date }}</p>
                    <h4 class="leading-normal font-semibold font-['aspergit']">{{ $article->title }}</h4>
                    <p class="leading-normal italic">Written by {{ $article->author }}</p>
                </div>
                @if($article->author == Auth::user()->profile->alias || $article->author == Auth::user()->name)
                {{-- @if($article->author == Auth::user()) --}}
                    <a href="/article/{{ $article->title }}/edit" class="hover:warm-red">Edit</a>
                @endif
            </div>
            <br>
            <p class="leading-normal">{{ $article->body }}</p>
        </div>
    </main>
</div>

{{-- Comment section --}}
<div class="comment_section body-width mb-10 py-8 sm:responsive-width">
    <h3 class="leading-normal font-bold">Comments</h3>
    
    {{-- Displaying comments (if any) --}}
    @if(!count($comments))
        <p class="leading-normal italic">No comments yet.</p>
    @else
        @foreach($comments as $comment)
        <div class="comment">
            <p class="leading-normal warm-red">{{ $comment->date }}</p>
            <p class="leading-normal italic">{{ $comment->author }}</p>
            <p class="leading-normal">{{ $comment->body }}</p>
        </div>
        <hr>
        @endforeach
    @endif

    {{-- Comment form --}}
    <form class="w-full space-y-6 sm:space-y-8 bg-gray-100 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg px-6"
        method="POST"
        action="/article/{{$article->title}}">
        @csrf
        <div class="container md:responsive">
            <div>
                <div class="flex flex-wrap mb-4 md:mb-6">
                    <label for="date" class="block text-gray-700 text-sm font-bold mb-2 ml-2 font-['aspergit']">
                        {{ __('Date') }}
                    </label>

                    <input id="date" type="text" 
                        class="form-border w-full bg-gray-100 @error('date') border-red-500 @enderror"
                        name="date" value="{{ old('date') }}" required placeholder="yyyy-mm-dd">

                    @error('date')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="flex flex-wrap mb-4 md:mb-6">
                    <label for="author" class="block text-gray-700 text-sm font-bold mb-2 ml-2 font-['aspergit']">
                        {{ __('Author') }}
                    </label>

                    <input id="author" type="text"
                        class="form-border w-full bg-gray-100 @error('author') border-red-500 @enderror" name="author"
                        value="{{ old('author') }}" required autocomplete="author" placeholder="Name or alias">

                    @error('author')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>
            
            <div class="flex flex-wrap mb-4 md:mb-6">
                <label for="body" class="sm:mb-4 block text-gray-700 text-sm2 font-bold ml-2 font-['aspergit']">
                    {{ __('Body') }}
                </label>

                <textarea id="body" type="text" rows="4" cols="50"
                    class="form-border w-full bg-gray-100 @error('body') border-red-500 @enderror" name="body"
                    required autocomplete="body"></textarea>
                @error('body')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap pb-8 warm-red mt-0">
            <button type="submit"
            class="mt-0 select-none font-bold whitespace-no-wrap py-2 px-4 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:p-2 font-['aspergit']">
            {{ __('Publish') }}
            </button>
        </div>
    </form>
</div>
    
@endsection