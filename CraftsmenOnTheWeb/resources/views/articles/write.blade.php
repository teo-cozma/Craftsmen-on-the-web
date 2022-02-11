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
        
        <h1 class="custom-h1">What's your story ? Any recent discoveries or events ?</h1>
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-gray-100" method="POST"
                action="{{ route('articles.write.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="container md:responsive">
                    {{-- <div> --}}
                        <div class="flex flex-wrap mb-4 md:mb-6">
                            <label for="date" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                                {{ __('Date') }}
                            </label>
    
                            <input id="date" type="text" 
                                class="form-border w-full bg-gray-100 @error('name') border-red-500 @enderror"
                                name="date" value="{{ old('date') }}" required autocomplete="date" placeholder="yyyy-mm-dd">
    
                            @error('date')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap mb-4 md:mb-6">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                                {{ __('Title') }}
                            </label>
    
                            <input id="title" type="text"
                                class="form-border w-full bg-gray-100 @error('title') border-red-500 @enderror" name="title"
                                value="{{ old('title') }}" required autocomplete="title" placeholder="Short and sweet">
    
                            @error('title')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap mb-4 md:mb-6">
                            <label for="author" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
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
                    {{-- </div> --}}
                    
                    
                    <div class="flex flex-wrap mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4 ml-2 font-['aspergit']">
                            {{ __('Image') }}
                        </label>

                        {{-- <img id="article_img" alt="article_img">
                        <script type="text/javascript">
                            var loadFile = function(event) {
                                var article_img = document.getElementById('image');
                                article_img.src = URL.createObjectURL(event.target.files[0]);
                                article_img.onload = function() {
                                    URL.revokeObjectURL(article_img.src) // free memory
                                }
                            };
                        </script> --}}

                        <input id="image" type="file"
                            class="form-border w-full bg-gray-100 @error('image') border-red-500 @enderror" name="image"
                            value="{{ old('image') }}" required onChange="displayImage(this)">
                        
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
                        required autocomplete="body"></textarea>
                    @error('body')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap pb-8 warm-red">
                    <button type="submit"
                    class="select-none font-bold whitespace-no-wrap py-4 px-6 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:py-4 font-['aspergit']">
                    {{ __('Publish') }}
                    </button>
                </div>
            </form>

        </section>
    </div>
</main>
@endsection