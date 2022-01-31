<div class="flex items-center justify-center">
    <div class="flex flex-col justify-around h-full w-full">
        <div>
            <h1 class="my-6 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl w-full">
                <p class="font-['victor-handwriting'] text-9xl">Craftsmen</p> 
                <p class="font-['aspergit'] text-4xl uppercase">On the Web</p> 
            </h1>

            <div class="navbar">
                <div class="body-width">
                    <ul class="flex items-center justify-between flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
                        <li>
                            <a href="{{ route('home') }}" class="no-underline hover:underline text-sm font-normal uppercase" title="Main">Main</a>
                        </li>
                        <li>
                            <a href="/" class="no-underline hover:underline text-sm font-normal uppercase" title="News">Write</a>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" class="no-underline hover:underline text-sm font-normal uppercase" title="About">Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               class="no-underline hover:underline text-sm font-normal uppercase"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>