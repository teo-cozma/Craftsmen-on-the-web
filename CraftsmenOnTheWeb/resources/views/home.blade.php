@extends('layouts.app')

@section('content')
{{-- <main class="sm:container sm:mx-auto sm:mt-10"> --}}
<main class="body-width flex flex-col sm:responsive-width">
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

        {{-- Displaying all articles, including those posted by other users --}}
        @foreach ($allArticles as $other)
        <a href="/article/{{ $other->title }}">
            <div class="card">
                {{-- @if ($other->image)
                <img src="{{ 'storage/production/' . $other->image }}" alt="article_img" class="flex flex-col justify-center items-center article_image_home">
                @endif --}}
                {{-- <img src="/storage/production/{{ $other->image }}" alt="article_img" class="flex flex-col justify-center items-center article_image_home"> --}}
                {{-- <img src="/img/{{ $other->image }}" alt="article_img" class="flex flex-col justify-center items-center article_image_home"> --}}
                {{-- <img src="/storage/uploads/{{ $article->image }}" alt="article_img" class="flex flex-col justify-center items-center"> --}}

                {{-- Default article image --}}
                <img src="{{ '\static\pexels-ono-kosuki-5973883.jpg' }}" alt="article_img" class="flex flex-col justify-center items-center article_image_home">

                    <div class="description">
                        <p class="leading-normal warm-red">{{ $other->date }}</p>
                        <h4 class="leading-normal font-semibold font-['aspergit']">{{ $other->title }}</h4>
                        <p class="leading-normal italic">{{ $other->author }}</p>
                        <br>
                        <p class="leading-normal hover:warm-red">Read more ...</p>
                    </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>
</main>
@endsection