@extends('layouts.app')

@section('content')
<main class="body-width sm:responsive-width">
    <div class="flex mb-10">
        <div class="w-full">
            <h1 class="custom-h1">Sign up</h1>

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <form class="w-full bg-form px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="container md:responsive">
                        <div class="flex flex-wrap md:mb-6">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}
                            </label>
    
                            <input id="name" type="text" class="form-input w-full bg-input @error('name')  border-red-500 @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}
                            </label>
    
                            <input id="email" type="email"
                                class="form-input w-full bg-input @error('email') border-red-500 @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="container md:responsive">
                        <div class="flex flex-wrap md:mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}
                            </label>
    
                            <input id="password" type="password"
                                class="form-input w-full bg-input @error('password') border-red-500 @enderror" name="password"
                                required autocomplete="new-password">
    
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
    
                        <div class="flex flex-wrap">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}
                            </label>
    
                            <input id="password-confirm" type="password" class="form-input w-full bg-input"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="select-none font-bold whitespace-no-wrap p-8 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:py-4">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-sm text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already a member ?') }}
                            <a class="text-warm-red hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
