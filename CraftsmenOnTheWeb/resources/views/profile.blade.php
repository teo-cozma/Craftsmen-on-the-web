@extends('layouts.app')

@section('content')
  <main class="body-width mb-10 sm:responsive-width">
    @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="custom-h1">Your profile</h1>
      <h3><strong>Alias</strong></h3>
        <p class="warm-red leading-higher"> {{ Auth::user()->profile->Alias ?? 'N/A' }} </p>
        <br><br>
      <h3><strong>What's your craft ?</strong></h3>
        <p class="warm-red leading-higher">{{ Auth::user()->profile->Craft ?? 'N/A' }}</p>
        <br><br>
      <h3><strong>What motivates your to create ?</strong></h3>
        <p class="warm-red leading-higher">{{ Auth::user()->profile->Motivation ?? 'N/A' }}.</p>
        <br>

    <h1 class="custom-h1">Basic information</h1>
      <h3><strong>Name</strong></h3>
        <p class="warm-red leading-higher"> {{ Auth::user()->name ?? 'N/A' }} </p>
        <br><br>
      <h3><strong>Email</strong></h3>
        <p class="warm-red leading-higher">{{ Auth::user()->email ?? 'N/A' }}</p>
  </main>
@endsection