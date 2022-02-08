<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Craftsmen On the Web') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <header>
        @include('layouts.header1')
    </header>

    {{-- Welcome section --}}
    <div class="body-width flex flex-col sm:responsive-width">
        <h1 class="custom-h1">Welcome to our digital platform</h1>

        @if(Route::has('login'))
            <div class="flex flex-col">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                    <br><br>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal uppercase my-4">Already a member ?</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal uppercase my-6">Wanna join ?</a>
                    @endif
                @endauth
            </div>
        @endif

        <img src="{{ '/img/carpenter-at-work.webp' }}" alt="at_work" class="flex flex-col justify-center items-center">
    </div>

    {{-- Latest news section --}}
    <div class="stories" id="news">
        <div class="body-width flex flex-col sm:responsive-width">
            <h1 class="custom-h1">Latest news</h1>
                <div class="container md:responsive mb-10">
                    @if($allArticles !== null)
                    @foreach ($allArticles as $other)
                        <div class="card">
                            @if ($other->image)
                            <img src="{{ asset ('img/' . $other->image )}}" alt="article_img" class="flex flex-col justify-center items-center article_image_home">
                            @endif
                                <div class="description">
                                    <p class="leading-normal warm-red">{{ $other->date }}</p>
                                    <h4 class="leading-normal font-semibold">{{ $other->title }}</h4>
                                    <p class="leading-normal italic">{{ $other->author }}</p>
                                    <br>
                                    <p class="leading-normal warm-red font-semibold">Sign in to read more...</p>
                                </div>
                        </div>
                    @endforeach
                @endif

                @if($allArticles == null)
                    <p class="leading-normal warm-red font-semibold">No news yet...</p>
                @endif

                {{-- <div class="card">
                    <img src="{{ '/img/crafting.jpg' }}" alt="at_work" class="flex flex-col justify-center items-center">
                    <div class="description">
                        <p>Date</p>
                        <h4>Title</h4>
                        <p>Author</p>
                        <br>
                        <p class="leading-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- About section --}}
    <div class="about md:responsive" id="aboutUs">
        <div class="card">
            <img src="{{ '/img/crafting.jpg' }}" alt="at_work" class="flex flex-col justify-center items-center h-full">
        </div>
        <div class="card p-8">
            <h1 class="custom-h1 text-white mt-1">Who we are</h1>
            <p class="px-3 text-white leading-normal">
                All countries are complaining about a drop in activity in the craft industry. The industrial revolution, mass production and competition from emerging countries have literally destroyed a large part of the craft industry. Nowadays, craftsmanship is rather considered as a sector of the past where we see people trying to survive from day to day. But this is a false image conveyed by the media and the consumer society. Numerous studies show a huge upsurge in interest in handicrafts. The latter are more authentic and they benefit from an irreproachable finish unlike the products produced on the assembly line. Unfortunately, craftsmen are rarely present on the web, because they think that a website creation dedicated to craftsmanship is not interesting when it is the opposite.
                <br><br>
                This is our core mission : sharing ideas, visions, creations thanks to an accessible platform, welcoming anyone curious about the various materials and tools, along with traditional or modern techniques, allowing them to create with their own hands. We hope to bring to light the reality of craftsmanship as a sector that is still very much alive.
            </p>
        </div>
    </div>

    {{-- Contact section --}}
    <div class="contact" id="contactUs">
        <div class="body-width flex flex-col sm:responsive-width">
            <h1 class="custom-h1">Craft your network - send us a message</h1>

            <div class="flex mb-10">
                <div class="w-full">
                    <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 bg-form" method="POST"
                            action="{{ route('contact.store') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="container md:responsive">
                                <div class="flex flex-wrap md:mb-6">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('Name') }}:
                                    </label>
            
                                    <input id="name" type="text" 
                                        class="form-input w-full bg-input @error('name') border-red-500 @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name">
            
                                    @error('name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
            
                                <div class="flex flex-wrap">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                        {{ __('E-Mail Address') }}:
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
        
                            <div class="flex flex-wrap">
                                <label for="message" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                    {{ __('Message') }}:
                                </label>
        
                                <textarea id="message" type="message"
                                    class="form-input w-full bg-input @error('password') border-red-500 @enderror" name="message"
                                    required autocomplete="message">
                                </textarea>
                                @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
        
                            <div class="flex flex-wrap pb-8 warm-red">
                                <button type="submit"
                                class="select-none font-bold whitespace-no-wrap p-8 rounded-lg text-base leading-normal no-underline text-gray-100 bg-warm-red sm:py-4">
                                {{ __('Submit') }}
                                </button>
                            </div>
                        </form>
        
                    </section>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    
</body>
</html>
