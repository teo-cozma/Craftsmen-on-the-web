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
        <section class="static welcome">
            <h1 class="text-4xl text-warm-red my-4">Welcome to our digital platform</h1>
            <div class="access-forms">
                <a href="/register">First-time on the digital front ? Join here !</a>
                <br><br>
                <a href="/login">Already a member ?</a>
            </div>
            <img src=" {{ asset('/img/carpenter-at-work.webp') }} " alt="at_work">
        </section>
        
        <section class="static dynamic">
            <h1 class="text-4xl text-warm-red my-4">Latest news</h1>
            <div class="articles">
                <div class="article">
                    <img src="{{ asset('/img/crafting.jpg') }}" alt="article1-img" width='500'>
                    <div>
                        <p>Date</p>
                        <p>Title</p>
                        <p>Author</p>
                        <p>Content</p>
                    </div>
                </div>
                <div class="article">
                    <img src="{{ asset('/img/crafting.jpg') }}" alt="article2-img" width='500'>
                    <div>
                        <p>Date</p>
                        <p>Title</p>
                        <p>Author</p>
                        <p>Content</p>
                    </div>
                </div>
            </div>
            <span>Sign in to read more!</span>
        </section>

        <section>
            <div class="container">
                <div class="grid-item">
                    <img src="{{ asset('/img/crafting.jpg') }}" alt="article1-img" width='500'>
                </div>
                <div class="grid-item" id="gi1">
                    <h1 class="text-4xl text-warm-red my-4">Who we are</h1>
                    <p id="description">All countries are complaining about a drop in activity in the craft industry. The industrial revolution, mass production and competition from emerging countries have literally destroyed a large part of the craft industry. Nowadays, craftsmanship is rather considered as a sector of the past where we see people trying to survive from day to day. But this is a false image conveyed by the media and the consumer society. Numerous studies show a huge upsurge in interest in handicrafts. The latter are more authentic and they benefit from an irreproachable finish unlike the products produced on the assembly line. Unfortunately, craftsmen are rarely present on the web, because they think that a website creation dedicated to craftsmanship is not interesting when it is the opposite.
                    <br><br>
                    Such is our mission : through this open platform of sharing ideas, visions, creations, we all bring to light the reality of craftsmanship as a sector that is still very much alive, as well as open to anyone curious and willing to get their hands in touch with various materials and tools, together with techniques, tradition or modern, which will allow them to create with their own hands.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="static">
            <h1 class="text-4xl text-warm-red my-4">Craft your network - send us a message</h1>
            <form action="/" method="POST" id='contact'> 
                <div class="names">
                    <div class="fname">
                        <label for="firstname">Firstname</label>
                        <input type="text">
                    </div>  
                    <div class="lname">
                        <label for="lastname">Lastname</label>
                        <input type="text">
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="email">
                    </div>
                </div>

                <div class="messageBox">
                    <label for="Message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
        
    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>