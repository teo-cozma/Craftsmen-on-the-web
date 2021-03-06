@extends('layouts.app')

@section('content')
{{-- <main class="sm:container sm:mx-auto sm:mt-10"> --}}
<main class="body-width sm:responsive-width">
    <div class="w-full my-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
       
        <div class="flex justify-between items-center">
            <h1 class="custom-h1">Edit or update your story</h1>
            {{-- <a href="{{ route('articles.article.show') }}" class=" hover:underline">Cancel</a> --}}
            
            <a href="/article/{{ $article->title }}" class=" hover:warm-red">Cancel</a>
            {{-- <a href="{{ route('articles.show', 'show') }}" class=" hover:underline">Cancel</a> --}}
        </div>

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            
            @if(Session::has('success'))
                <div class="alert alert-success py-4">
                    {{Session::get('success')}}
                </div>
            @endif

            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-gray-100" method="POST"
                action="/article/{{ $article->title }}/edit"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="container md:responsive">
                    <div class="flex flex-wrap md:mb-6">
                        <label for="date" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                            {{ __('Date') }}
                        </label>

                        <input id="date" type="text" 
                            class="form-border w-full bg-gray-100 @error('name') border-red-500 @enderror"
                            name="date" value="{{ $article->date }}" required autocomplete="date" placeholder="yyyy-mm-dd">

                        @error('date')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap md:mb-6">
                        <label for="title" class=" font-['aspergit'] block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2">
                            {{ __('Title') }}
                        </label>

                        <input id="title" type="text"
                            class="form-border w-full bg-gray-100 @error('title') border-red-500 @enderror" name="title"
                            value="{{ $article->title }}" required autocomplete="title" placeholder="Short and sweet">

                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap md:mb-6">
                        <label for="author" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                            {{ __('Author') }}
                        </label>

                        <input id="author" type="text"
                            class="form-border w-full bg-gray-100 @error('author') border-red-500 @enderror" name="author"
                            value="{{ $article->author }}" required autocomplete="author" placeholder="Name or alias">

                        @error('author')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="flex flex-wrap">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                            {{ __('Image') }}
                        </label>

                        <input id="image" type="file"
                            class="form-border w-full bg-gray-100 @error('image') border-red-500 @enderror" name="image">

                        @error('image')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <label for="body" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                        {{ __('Body') }}
                    </label>

                    <textarea id="body" type="text" rows="4" cols="50"
                        class="form-border w-full bg-gray-100 @error('body') border-red-500 @enderror" name="body"
                        required autocomplete="body">{{ $article->body }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap pb-8 warm-red justify-between items-center">
                    <button type="submit"
                    class="select-none font-bold whitespace-no-wrap py-4 px-6 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:py-4 font-['aspergit']">
                    {{ __('Confirm') }}
                    </button>

                    {{-- <a href="delete/{{ $article->title }}" class="hover:warm-red">Delete</a> --}}
                    {{-- <form method="POST" action="/article/{{ $article->title }}/edit" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="hover:warm-red">Delete</button>
                    </form> --}}
                    
                </div>
            </form>
            {{-- <form method="POST" action="/article/{{ $article->title }}/edit" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- @csrf --}}
                {{-- @method('DELETE')
                <button type='submit' class="hover:warm-red">Delete</button>
            </form> --}}
        </section>
    </div>
</main>
@endsection