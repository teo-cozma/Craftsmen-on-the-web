@extends('layouts.app')

@section('content')
{{-- <main class="sm:container sm:mx-auto sm:mt-10"> --}}
<main class="body-width">
    <div class="w-full my-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <header class="font-semibold py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    {{-- Use the following line for the profile information --}}
                    Welcome {{ Auth::user()->name }}, fellow craftsman!
                </p>
            </div>
        </section>

        <h1 class="custom-h1">Latest news, stories, posts...</h1>
        <div class="container md:responsive mb-10">

        {{-- Displaying the authenticated user's articles, if they have any --}}
        {{-- @if(Auth::user()->articles() !== null)
        @foreach ($articles as $article)
        <a href="/article/{{ $article->title }}">
            <div class="card">
                @if ($article->image)
                <img src="{{ asset ('img/' . $article->image )}}" alt="article_img" class="flex flex-col justify-center items-center article_image_home">
                @endif
                    <div class="description">
                        <p class="leading-normal warm-red">{{ $article->date }}</p>
                        <h4 class="leading-normal font-semibold">{{ $article->title }}</h4>
                        <p class="leading-normal italic">{{ $article->author }}</p>
                        <br>
                        <p class="leading-normal">Read more ...</p>
                    </div>
            </div>
            </a>
        @endforeach
        @endif --}}

        {{-- Displaying other articles posted by other users --}}
        @foreach ($allArticles as $other)
        <a href="/article/{{ $other->title }}">
            <div class="card">
                @if ($other->image)
                <img src="{{ asset ('img/' . $other->image )}}" alt="article_img" class="flex flex-col justify-center items-center article_image_home">
                {{-- <img src="/storage/uploads/{{ $article->image }}" alt="article_img" class="flex flex-col justify-center items-center"> --}}
                @endif
                    <div class="description">
                        <p class="leading-normal warm-red">{{ $other->date }}</p>
                        <h4 class="leading-normal font-semibold">{{ $other->title }}</h4>
                        <p class="leading-normal italic">{{ $other->author }}</p>
                        <br>
                        <p class="leading-normal">Read more ...</p>
                    </div>
            </div>
            </a>
            @endforeach
        </div>

    </div>
</main>
@endsection