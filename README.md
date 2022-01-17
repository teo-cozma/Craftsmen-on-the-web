# npProject

## Solo work on promoting craftsmanship
### Languages and tools
- VS code (text editor)
- Adobe XD (prototyping)
- Trello ? (organisation)

- Backend :
    - Laravel
    - Node JS
    - Postman (testing APIs)
    - MongoDB Atlas (creating the database ? see if it's possible to create a remote db, or thanks to Heroku)
- Frontend :
    - React ? (**TBD**)
    - Angular ? (**TBD**)
- Deployment : 
    - Heroku (+ remote DBA ? **TBD**)

### Project definition
- Theme of choice : promote craftsmanship.
    - What exactly is meant by craftsmanship ? A set of artisanal skills that demonstrate the capacity to create/build something (usually functional over esthetic) ; skills in a particular craft.
- What's the story of this theme :
    - (apparent) Drop in activity due to historical and cultural circumstances ;
    - Image of a "sector of the past" ;
    - Exasperation of the latter due to (lacking/inaccurate) media coverage + consumer society ;
    - Contradiction found in actual growing interest in crafts
        - Interest in the authenticity achieved in the final product (VS assembly line)
        - Craftsmen are rarely present on the web as they believe people are genuinely uninterested ; however... *

* *Personal findings and experience*
On social media platforms (mainly Youtube), an enormous variety of DIY channels ranging from small and simple crafts meant for personal enjoyment (including "hacks" that can make one's homelife a little easier) to more complex skills such as bookbinding and woodworking.

In addition, one can find many schools that are entirely devoted to developing craftsman or artisanal skills : from my personal experience, Ecoles supérieures in France dedicated to "applied arts" (*arts appliqués*) which include carpentry, glass making, welding...

In the sector of design, there is also an emphasis on the benefits of acquiring such skills, not only for one's personal interest and (hobby) curiosity, but also in the context of using said skills for the betterment of society overall, like the development of "smart" materials that are much less wasteful and harmful to us, or (and this is another extremely popular subcategory of Youtube videos/channels) developing new ways of organizing one's space, particularly in small houses or apartments. 
(This is probably deviating slightly from actual craftsmanship, but it's still an interesting indicator of a surging interest in the idea and **ability to create or (re)build something for oneself, using one's own hands**.)
This might be an interesting starting point for coming up with a site that raises awareness to the masses, or rather, since it seems like the masses (but not the media) are quite aware of how interesting craftsmanship is, a site that **consolidates** interest, that gathers as many sources as possible, as many paths one can take to **discovering** as much as they want about craftsmanship.

It seems that the main issue/challange surrounding this project is the fact that many craftsman themselves believe that no one is interested in their (personal/professional) work, or this kind of work in general. Perhaps a more precise goal of this site ought to be **creating a platform for these creators and artisans**, that they may freely post their work and write comments about their favorite artisans, materials, tools, etc. Kind of like an Instagram, DeviantArt, Pinterest or Behance, solely dedicated to craftsmanship.
This kind of site could also be a platform that challenges and even combats the perceived image of a sector that is merely trying to "survive" the context of the 21st century. Nowadays, with the internet and all the accessible information that it can provide to just about anyone, people have more choices open to them about what they want to learn for themselves, without having to justify it in any shape or form, and without having to spend certain (ridiculous) amounts of money to learn this stuff.

However, one of the dangers might be overreaching and thus not having a clear goal. A platform that promotes craftsmanship should probably be more that just creating an account and putting nice pictures of someone's work. It should also be about **raising awareness** for other craftsmen, crafts and artisanal skills in general, and maybe even **networking** with companies or large organisations whose goals also include promoting these kinds of skills. An inviting platform that **encourages** anyone to share their passion for their craft.

*What's the scope of this project ?*
I'm quite aware of the fact that in Brussels (even Belgium overall) has numerous schools and locations, like FabLabs, where craftmanship is the central activity, and that includes creating actual things, experimenting with skills and techniques that mix traditional with contemporary technology, and of course teaching all this to anyone who's interested. Examples :
- Fablabs in Brussels ;
- Bookbinding in Liège ? (must be verified ; maybe something similar to "livre d'artiste") ;
- Glazenhuis in Lommel : glassmaking workshops ;
- In Brico's all over the country, there are plenty of tools and resources available for DIY projects ;
- Other things to be determined ... ?

---

### Project log
#### Day one (17/01)
- [ ] Take the ENTIRE day to define the project (maybe even tomorrow as well); 

- [ ] Do some research (refresh memory in some areas) on the topic
    - The schools
    - The DIY channels on Youtube
    - The design trends (see old university notes)
    - Examples of actual platforms (Behance, Deviantart, Pinterest...) and how they work to showcase people's work and awareness of said work, or brand even.

- [ ] link what's interesting and doable (with my current skillset) to the must-haves that need to be included :
    - System of sessions (using Laravel) : 
        - Registration (sign up) -> been there, done that, but not yet with Laravel
        - (Dis)connection (login, logout) -> see previous mention.
        - Lost password (click a link on the login page that will lead to another form that inludes this functionality) -> haven't done that myself, but pretty sure there's good documentation about that + a teammate with that experience.
        - Different privileges 
            - The welcome page, registration and login pages, and the static site (forum/feed, comments, articles, pictures) can be available to those who are not registered/logged in.
            - Commenting on different posts, articles, or images shared, creating, editing and deleting those comments or posts, these privileges are only accessible to those who are registered and logged in. How do I manage those sessions ?
            
    - User interactions : comments, forum, chat, interactive maps... (there are more elements, but these to me seem the most doable, and comprehensive for the time being)
    - Using an API (this seems applicable in the case of creating posts and comments ; if there's another application, I need to research and find out now !)
    
- [ ] The steps to take, technologies that will be used.
    - Welcome page (Crafts community, Craft your network, the artisanal workshop brought to a collective digital front, The artisan's digital workshop)
        - Display of site logo, nav elements (sign up, login, about, contact) -> this will be common to all pages.
        - Hero section :
            - Welcome message
            - "Wanna join ?" + "Already a member ?"
            - Who we are / more about this site
        - Footer :
            - Contact information
            - Social media logos
            - Newsletter ?
            - ...
        - (These elements, which are common to every page, can be rendered using EJS partials. However, their compatibility with React seems questionable, so another method using React, or whichever framework I go with, may need to be researched.)

    - Registration (I believe the functionalities listed here + login are doable with Laravel ; since it's PHP based, I might have an easier time going about it. I might...):
        - Sign up form
            
            *(frontend)*
            - Basic info :
                - Firstname
                - Lastname
                - Email
                - Password
                - Confirm password
            - Profile info :
                - Pseudonyme/Alias
                - What's your craft ?
                - Profile image ?
                - About you (short summary)

            *(backend)*
            - DB schemas (Mongoose)
                - User (first + last names, email, password (hashed))
                - Profile (Alias, Craft, **image ? I'll need to find out**, About)
            - API
                - User/create
                - Profile/create
        - Sign in button, redirecting to main page with all the posts and feed and stuff.
    
    - Log in :
        *(frontend)*
        - Form :
            - Alias
            - Password
        - Forgot password ?
            - Another form
                - Email
        
        *(backend)*
        - API
            - **user/:id GET ???**
        

    - Once registered and logged in :
        - Main page 
            - Recent posts
            - Comments
                - Displayed in most recent post (-1)
                - Small form
                    - Content
                    - Send button
                - Access to the user's own comments so they can edit or delete them.
                - Database of comments :
                    - All comments made by every user
                    - All comments made by one user that only they can access, modify, delete (CRUD application here)
            

            - Navbar : 
                - Added buttons for profile page (can be edited)
                - + logout (end session)


## Resources
- Graphic charters : https://www.victoria-agency.be/blog/what-is-a-graphic-charter/2020

- Technologies
    - https://www.endpointdev.com/blog/2021/05/integrating-laravel-with-a-react-frontend/

- Inspiration :
    - https://craftsmanship.net/