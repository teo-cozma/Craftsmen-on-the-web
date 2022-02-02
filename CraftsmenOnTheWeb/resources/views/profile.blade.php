@extends('layouts.app')

@section('content')
<main class="body-width">
    @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="custom-h1">Your profile</h1>
    <h3>Alias</h3>
    <p>Wood whisperer</p>
    {{-- <p> {{ $user->name }} </p> --}}
    <br><br>
    <h3>Craft</h3>
    <p>Carpentry</p>
    <br><br>
    <h3>Motivation</h3>
    <p>Creating beautiful and functional pieces, bringing comfort and warmth to any home.</p>
    <br><br>

    {{-- <div class="w-full">
      <table class="table-fixed">
          <thead>
            <tr>
              <th>Alias</th>
              <th>Craft</th>
              <th>Motivation</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Wood whisperer</td>
              <td>Carpentry</td>
              <td>Creating beautiful and functional pieces, bringing comfort and warmth to any home.</td>
            </tr>
          </tbody>
        </table>
    </div> --}}
</main>
@endsection