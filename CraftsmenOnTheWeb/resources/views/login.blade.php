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
            <h1 class="text-4xl text-warm-red my-4">Log in</h1>
            <form action="{{ route('login.custom') }}" method="POST" class='logged-out'> 
                @csrf
                <label for="email">Email</label>
                <input type="email" placeholder='quality@carpentry.com' name="email" id="email">
                @if ($errors->has('email'))
                <span class="text-danger" role="alert">{{ $errors->first('email') }}</span>
                @endif

                <label for="password">Password</label>
                <input type="password" placeholder='Something secure, min 6chars' name="password" id="password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <button type="submit">Log in</button>

                <p>Not yet a member ? <a href="/register">Join us !</a></p>
                <p>Forgot your password ? <a href="/password">Let us fix that!</a></p>
            </form>
        </section>
    </main>
    
    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>