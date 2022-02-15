@extends('layouts.app')

@section('content')
  <main class="body-width mb-10 sm:responsive-width">
    @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="flex justify-between items-center">
      <h1 class="custom-h1">Your profile</h1>
      {{-- <a href="/profile/{{ Auth::user()->id }}/{{ route('profiles.edit') }}" class=" hover:underline">Edit</a> --}}
      <a href="/profile/{{ Auth::user()->id }}/edit" class="hover:warm-red">Edit</a>
    </div>

    <div class="container md:responsive mb-10 items-center sm-center">
      <div class="mb-10">
        {{-- Default profile image for Heroku --}}
        <img src="{{ '/img/Default_profile_image.png' }}" class="profile_image">

        {{-- @if(Auth::user()->profile === null) --}}
        {{-- <img src="/img/Default_profile_image.png" class="profile_image"> --}}
        {{-- @else --}}
        {{-- <img src="{{ 'production/'.(Auth::user()->profile->image) }}" alt="profile_image" class="profile_image"> --}}
        {{-- <img src="{{ asset ('production/'.Auth::user()->profile->image) }}" alt="profile_image" class="profile_image"> --}}
        {{-- <img src="{{ '/storage/production/' . Auth::user()->profile->image }}" alt="profile_image" class="profile_image"> --}}
        {{-- <img src="/storage/production/{{Auth::user()->profile->image }}" alt="profile_image" class="profile_image"> --}}
        {{-- <img src="/img/{{ Auth::user()->profile->image }}" alt="profile_image" class="profile_image"> --}}
        {{-- <img src="{{ asset ('img/' . Auth::user()->profile->image )}}" alt="profile_image" class="profile_image"> --}}
        {{-- @endif --}}

      </div>
      <div>
        <h3 class="leading-normal font-semibold font-['aspergit']">Alias</h3>
          <p class="warm-red leading-higher"> {{ Auth::user()->profile->alias ?? 'N/A' }} </p>
        <br><br>
        <h3 class="leading-normal font-semibold font-['aspergit']">What's your craft ?</h3>
          <p class="warm-red leading-higher">{{ Auth::user()->profile->craft ?? 'N/A' }}</p>
          <br><br>
          <h3 class="leading-normal font-semibold font-['aspergit']">What motivates you to create ?</h3>
          <p class="warm-red leading-higher">{{ Auth::user()->profile->motivation ?? 'N/A' }}</p>
          <br>
      </div>
    </div>

    <h1 class="custom-h1">Basic information</h1>
    <div class="container md:responsive mb-10 items-center">
      <div>
        <h3 class="leading-normal font-semibold font-['aspergit']">Name</h3>
        <p class="warm-red leading-higher"> {{ Auth::user()->name ?? 'N/A' }} </p>
      </div>
  
      <div>
        <h3 class="leading-normal font-semibold font-['aspergit']">Email</h3>
        <p class="warm-red leading-higher">{{ Auth::user()->email ?? 'N/A' }}</p>
      </div>
      
    </div>
  </main>
@endsection