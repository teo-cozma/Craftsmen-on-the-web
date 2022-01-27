<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <main>
        <section class="static">
            <h1 class="text-4xl text-warm-red my-4">Sign up</h1>
            <form action="{{ route('register.custom') }}" method="POST" class='logged-out'>
                @csrf
            <!-- <div class="row"> -->
                <label for="firstname">Firstname</label>
                <input type="text" placeholder='John' name="firstname" id="firstname">
                @if ($errors->has('firstname'))
                <span class="text-danger" role="alert">{{ $errors->first('firstname') }}</span>
                @endif

                <label for="lastname">Lastname</label>
                <input type="text" placeholder='Doe' name="lastname" id="lastname">
                @if ($errors->has('lastname'))
                <span class="text-danger" role="alert">{{ $errors->first('lastname') }}</span>
                @endif
            <!-- </div> -->
            
                <label for="email">Email</label>
                <input type="email" placeholder='quality@carpentry.com' name="email" id="email">
                @if ($errors->has('email'))
                <span class="text-danger" role="alert">{{ $errors->first('email') }}</span>
                @endif

                <label for="password">Password</label>
                <input type="password" placeholder='Something secure, min 6chars' name="password1" id="password1">
                @if ($errors->has('password'))
                <span class="text-danger" role="alert">{{ $errors->first('password') }}</span>
                @endif

                <label for="password">Confirm password</label>
                <input type="password" placeholder='See right above' name="password2" id="password2">
                @if ($errors->has('password' != 'password2'))
                <span class="text-danger" role="alert">{{ $errors->first('password2') }}</span>
                @endif
            
                <button type="submit">Sign up</button>

                <p>Already a member ? <a href="/login">Log back in!</a></p>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>