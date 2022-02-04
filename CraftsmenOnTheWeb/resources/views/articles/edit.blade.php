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
            <h1 class="custom-h1">Edit, update or remove your story</h1>
            <a href="" class=" hover:underline">Cancel</a>
        </div>

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            
            @if(Session::has('success'))
                <div class="alert alert-success py-4">
                    {{Session::get('success')}}
                </div>
            @endif

            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-gray-100" method="POST"
                {{-- action="/profile/{id}/edit" --}}
                action="/write/{{ Auth::user()->id }}/edit"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="container md:responsive">
                    <div class="flex flex-wrap md:mb-6">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Image (optional)') }}
                        </label>

                        <input id="image" type="file"
                            class="form-border w-full bg-gray-100 @error('image') border-red-500 @enderror" name="image"
                            value="{{ old('image') }}">

                        @error('image')
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
                            class="form-border w-full bg-gray-100 @error('alias') border-red-500 @enderror"
                            name="alias" value="{{ Auth::user()->profile->Alias ?? 'N/A' }}" required autocomplete="alias">

                        @error('alias')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap md:mb-6">
                        <label for="craft" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('What\'s your craft ?') }}
                        </label>

                        <input id="craft" type="text"
                            class="form-border w-full bg-gray-100 @error('craft') border-red-500 @enderror" name="craft"
                            value="{{ Auth::user()->profile->Craft ?? 'N/A' }}" required autocomplete="craft">

                        @error('craft')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap md:mb-6">
                        <label for="motivation" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('What motivates you to create ?') }}
                        </label>

                        <input id="motivation" type="text"
                            class="form-border w-full bg-gray-100 @error('motivation') border-red-500 @enderror" name="motivation"
                            value="{{ Auth::user()->profile->Motivation ?? 'N/A' }}" autocomplete="motivation">
                        
                        @error('motivation')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap pb-8 warm-red">
                    <button type="submit"
                    class="select-none font-bold whitespace-no-wrap p-8 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:py-4">
                    {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection