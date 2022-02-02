<div class="flex items-center justify-center">
    <div class="flex flex-col justify-around h-full w-full">
        <div>
            <h1 class="my-6 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl w-full">
                <a href="/">
                    <p class="font-['victor-handwriting'] text-8xl">Craftsmen</p> 
                    <p class="font-['aspergit'] text-4xl uppercase">On the Web</p> 
                </a>
                
            </h1>
            <div class="navbar">
                <div class="body-width">
                    <ul class="flex items-center justify-between flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
                        <li>
                            <a href="{{ route('welcome') }}" class="no-underline hover:underline text-sm font-normal uppercase" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('welcome', '#news') }}" class="no-underline hover:underline text-sm font-normal uppercase" title="News">News</a>
                        </li>
                        <li>
                            <a href="{{ route('welcome', '#aboutUs') }}" class="no-underline hover:underline text-sm font-normal uppercase" title="About">About</a>
                        </li>
                        <li>
                            <a href="{{ route('welcome', '#contactUs') }}" class="no-underline hover:underline text-sm font-normal uppercase" title="Contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>