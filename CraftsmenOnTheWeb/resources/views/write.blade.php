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
        
        <h1 class="custom-h1">What's your story ? Any recent discoveries, or events ?</h1>
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-gray-100" method="POST"
                action="{{ route('write.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="container md:responsive">
                    <div class="flex flex-wrap md:mb-6">
                        <label for="date" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Date') }}
                        </label>

                        <input id="date" type="text" 
                            class="form-border w-full bg-gray-100 @error('name') border-red-500 @enderror"
                            name="date" value="{{ old('date') }}" required autocomplete="date">

                        @error('date')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap md:mb-6">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Title') }}
                        </label>

                        <input id="title" type="text"
                            class="form-border w-full bg-gray-100 @error('title') border-red-500 @enderror" name="title"
                            value="{{ old('title') }}" required autocomplete="title">

                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap md:mb-6">
                        <label for="alias" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Alias') }}
                        </label>

                        <input id="alias" type="text"
                            class="form-border w-full bg-gray-100 @error('alias') border-red-500 @enderror" name="alias"
                            value="{{ old('alias') }}" required autocomplete="alias">

                        @error('alias')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    
                    <div class="flex flex-wrap">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Image (optional)') }}
                        </label>

                        <input id="image" type="file"
                            class="form-border w-full bg-gray-100 @error('image') border-red-500 @enderror" name="image"
                            value="{{ old('image') }}" autocomplete="image">

                        @error('image')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <label for="content" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Content') }}
                    </label>

                    <textarea id="content" type="text"
                        class="form-border w-full bg-gray-100 @error('content') border-red-500 @enderror" name="content"
                        required autocomplete="content">
                    </textarea>
                    @error('content')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-wrap pb-8 warm-red">
                    <button type="submit"
                    class="select-none font-bold whitespace-no-wrap p-8 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:py-4">
                    {{ __('Publish') }}
                    </button>
                </div>
            </form>

        </section>
    </div>
</main>
@endsection