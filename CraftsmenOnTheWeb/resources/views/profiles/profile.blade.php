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
      <a href="/profile/{{ Auth::user()->id }}/edit" class=" hover:underline">Edit</a>
    </div>
    <div class="container md:responsive mb-10 items-center">
      <div class="mb-10">

        @if(Auth::user()->profile->image)
          <img src="/storage/{{ Auth::user()->profile->image }}" alt="profile_image" class="profile_image">
        @else
          <img src="{{ '/img/Default_profile_image.png' }}" class="profile_image">
        @endif

      </div>
      <div>
        <h3 class="leading-normal font-semibold">Alias</h3>
          <p class="warm-red leading-higher"> {{ Auth::user()->profile->Alias ?? 'N/A' }} </p>
        <br><br>
        <h3 class="leading-normal font-semibold">What's your craft ?</h3>
          <p class="warm-red leading-higher">{{ Auth::user()->profile->Craft ?? 'N/A' }}</p>
          <br><br>
          <h3 class="leading-normal font-semibold">What motivates you to create ?</h3>
          <p class="warm-red leading-higher">{{ Auth::user()->profile->Motivation ?? 'N/A' }}</p>
          <br>
      </div>
    </div>

    <h1 class="custom-h1">Basic information</h1>
    <div class="container md:responsive mb-10 items-center">
      <div>
        <h3 class="leading-normal font-semibold">Name</h3>
        <p class="warm-red leading-higher"> {{ Auth::user()->name ?? 'N/A' }} </p>
      </div>
  
      <div>
        <h3 class="leading-normal font-semibold">Email</h3>
        <p class="warm-red leading-higher">{{ Auth::user()->email ?? 'N/A' }}</p>
      </div>
      
    </div>
  </main>
@endsection