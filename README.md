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
- Theme of choice : **promote craftsmanship.**
    - What exactly is meant by craftsmanship ? A set of artisanal skills that demonstrate the capacity to create/build something (usually functional over esthetic) ; skills in a particular craft.
- What's the story of this theme :
    - (apparent) Drop in activity due to historical and cultural circumstances ;
    - Image of a "sector of the past" ;
    - Exasperation of the latter due to (lacking/inaccurate) media coverage + consumer society ;
    - Contradiction found in actual growing interest in crafts
        - Interest in the authenticity achieved in the final product (VS assembly line)
        - Craftsmen are rarely present on the web as they believe people are genuinely uninterested ; however...

*Personal findings and experience*
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
#### Day one (17/01) and Day two (18/01)
- Take the ENTIRE day to define the project.

- Do some research (refresh memory in some areas) on the topic
    - The schools
    - The DIY channels on Youtube
    - The design trends (see old university notes)
    - Examples of actual platforms (Behance, Deviantart, Pinterest...) and how they work to showcase people's work and awareness of said work, or brand even.

- Link what's interesting and doable (with my current skillset) to the must-haves that need to be included :
    - System of sessions (using Laravel) : 
        - Registration (sign up) -> been there, done that, but not yet with Laravel
        - (Dis)connection (login, logout) -> see previous mention.
        - Lost password (click a link on the login page that will lead to another form that inludes this functionality) -> haven't done that myself, but pretty sure there's good documentation about that + a teammate with that experience.
        - Different privileges :
            - The welcome page, registration and login pages, and the static site (forum/feed, comments, articles, pictures) can be available to those who are not registered/logged in.
            - Commenting on different posts, articles, or images shared, creating, editing and deleting those comments or posts, these privileges are only accessible to those who are registered and logged in. How do I manage those sessions ?
            
    - User interactions : comments, forum, chat, interactive maps... (there are more elements, but these to me seem the most doable, and comprehensive for the time being).

    - Using an API (this seems applicable in the case of creating posts and comments ; if there's another application, I need to research and find out now !).


    
- The steps to take, technologies that will be used.
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
        - (These elements, which are common to every page, can be rendered using EJS partials. However, there's a compatibility issue with React, so another method using React, or whichever framework I go with, will need to be researched.)

    - Registration (I believe the functionalities listed here + login are doable with Laravel ; since it's **PHP based**, I might have an easier time going about it. I might...):
        - Sign up form :
            *(frontend)*
            - Basic info : Firstname, Lastname, Email, Password, Confirm password
            - Profile info : Pseudonyme/Alias, What's your craft ? Profile image ? About you (short summary, max 50 characters, Placeholder:'What do you do, and what inspires you as a creator')
            - Button : Join the artisanal network (still gotta work on that). Or just 'sign up'!

            *(backend)*
            - DB schemas (Mongoose)
                - ***User schema*** (first + last names, email, password (hashed))
                - ***Profile schema*** (Alias, Craft, **image ? I'll need to find out**, About)
            - API ???
                - User/create
                - Profile/create
        - Sign in button, redirecting to main page with all the posts and feed and stuff.
    
    - Log in :
        *(frontend)*
        - Form : Alias, Password (authentication !!!)
        - Forgot password ? Email, Request new password.
        
        *(backend)*
        - API : **user/:id -> GET ???**
        
    - Once registered and logged in :
        - Main page :
            - Recent posts
                - ***Post schema*** :
                    - Title
                    - Author (alias or name --> **is there any way to create if conditions that can take either one of these elements to verify that a particular user has created this post ?**)
                    - Content (or body ? Whichever makes things **less** confusing)
                - Database + API : 
                    - posts/all
                    - posts/user
                        - GET
                    - posts/user/create
                        - POST
                    - posts/user/:id/edit
                        - POST, DELETE, PATCH
                    - posts/user/:id
                        - GET
            - Comments
                - ***Comments schema***
                    - Alias/name (find a way to automatically include this once the comment is submitted !!!)
                    - Date (same principle)
                    - Content
                - Displayed in most recent post (-1)
                    - API : comments/all
                        - GET
                - Small form :
                    - Content
                    - Send button
                - All comments made by one user that only they can access, modify, delete (CRUD application here)
                    - API : 
                        - comments/user
                            - GET
                        - comments/user/create
                            - POST
                        - comments/user/:id/edit
                            - POST, DELETE, PATCH
                        - comments/user/:id
                            - GET
                    - Idea : if(pseudo = user.pseudo) || (name = user.firstname) { display the edit/delete button on the respective comments } else { only display the comment, with no edit/delete button.}

            - Navbar : 
                - Added buttons for profile page (can be edited)
                - Logout (end session)
                - Searchbar for a particular craftsman or article ?
        
        - Profile page :
            - Profile displayed + button to go to an edit page
            - Profile edit page, forms :
                - Modify basic information (see ***User schema***)
                    - API :
                        - user/edit-info
                            - PATCH (update)
                            - GET
                - Modify profile information (see ***Profile schema***)
                    - API :
                        - user/edit-profile
                            - PATCH (update)
                            - GET

*How to use each technology ?*
It looks like Laravel can be used as a Fullstack framework, or just serve the API backend. In the case of fullstack, the frontend will then be rendered with Blade templates (similar to EJS templates). In the latter case, the API backend can simply provide authentication and data storage/retrieval. Separate documentation exists for each scenario.
This decision will affect how I render the frontend (and whether or not I end up learning React with this project). However, there is Inertia.js, which is powered by Vue or React, specified as a stack when running a command - although this is without an API.

Also starter-kits : are they worth trying in order to get into Laravel ?

**To summarise (18/01)**
This project's theme is promoting craftsmanship thanks to an open web platform that allows craftsman and artisans to sign up and freely post about their work, sources and people/places of inspiration, write comments or open discussion with other creators about topics of their choice. 
It will include **sign up** and **login** forms where users will provide and submit their basic information to a database via a form. After first registration, another form for the **profile** will be provided so they can add more personal information about themselves. This information (basic + personal) can later be modified and updated into the database via forms in the profile/edit page.
The main page will display **posts**/articles and **comments** made by every user. For the user currently logged in, they can only view the content made by others, but edit the content they wrote themselves (posts + comments).

This defines the overall project.

The technologies that will be used include Laravel : certainly for the backend and API, however the possibility of rendering views with the same technology seems to indicate no need for a separate framework for the frontend, such as React. It might make sense to proceed this way if I plan to take a fullstack approach, but might also be a missed opportunity to learn a frontend framework (other than Bootstrap). This I need to discuss and weigh my options tomorrow.
So the frontend is left to be determined.
For the API and database (hosting and schemas), Mongodb Atlas if my first option, as I have the most recent experience with that. However, I also have some relevant experience with MySQL and Docker, both of which appear to be very compatible with Laravel. Either of these technologies would be worth developing this project with, but once again, I might need more input before I make a final decision this week. And that includes looking up all the (useful) tutorials I can find.

Another step I need to take before starting this project is graphic charter and mockup creation ; this is something I'm most comfortable with and can take the day (maybe less time). This will be done with pen and paper and more visually rendered with Adobe XD.

#### Day three (19/01)
Mockup and graphic charter complete (though some tweaks might be made later ; newer versions will be uploaded).
Another summary outlining the major steps of this project, which pages to make, and what do they each contain (boxes will be checked with every day of progress) :

0. All pages :
    - [ ] Header = logo + Navbar (Home, News, About, Contact - STATIC)
    - [ ] Footer = Copyright + Social media (LinkedIn, Github - STATIC)

1. Home/welcome page (user logged out - access only to this single, scroll-down page) :
    - [ ] Hero section with welcome message
        - [ ] Register link
        - [ ] Login link
    - [ ] Latest news (DYNAMIC) = 2 recent posts
        - [ ] **POSTS database** = Picture, date, title, author, content
            - Try the Mongodb integration tutorial to test the post API for this page with some mock data, using Postman ! The good news is that they're very compatible when it comes to integration !
        - [ ] Get posts by date (most recent), limit = 2
            - ***GET ; /posts ; action: index ; route : posts.index***
    - [ ] About section (STATIC) containing mission statement
    - [ ] Contact form (STATIC)
        - [ ] **CONTACT database**
            - ***POST ; /contact ; action: index ; route : comment.index***
        - [ ] POST new message

2. Sign up :
    - [ ] 1st registration form (STATIC)
        - [ ] **USER database** = Firstname, lastname, email, password (+ confirm password in form), profile.
            - ***POST ; /user ; action: create ; user.create***
        - Already a member ? Redirect to login page.

3. Login :
    - [ ] Login form (STATIC)
        - [ ] **USER database** (just email and password -> authentication system)
        - [ ] Not yet a member ? Redirect to sign up page.
        - [ ] Forgot password ? Let's fix that !

4. Forgot password :
    - [ ] Password recovery form (STATIC)
        - [ ] **USER database** (just email -> authentication system)
            - [ ] Find out what are the functionalities behind this, as well as how to implement with Laravel.

5. Create profile (1st logged in) :
    - [ ] Profile form
        - [ ] **PROFILE database** = Alias, craft, motivation
            - ***GET ; /profile ; action: create ; profile.create***
            - ***POST ; /profile ; action: store ; profile.store***
        - [ ] Skip for now = direct towards main page

6. Main page (logged in) :
    - [ ] New header = Logo + Navbar (Main, write, profile, Logout - STATIC)
    - [ ] Latest news, stories, posts...
        - [ ] **ARTICLE database** = Picture, data, title, author, content
            - ***GET ; /main ; action: main ; articles.main***
        - [ ] Search bar = keyword/filter
            - [ ] If it's not empty, GET all posts matching the keyword ; else, GET all articles.
            - ***GET ; /main/{article}; action: show ; articles.show***
        - [ ] 1 card per article (DYNAMIC)

7. Single post by another user (DYNAMIC) :
    - [ ] Once clicked, GET by :id and display all contents (+ picture, if applicable)
    - [ ] Comment section
        - [ ] **COMMENT database** = Date, alias, content (how much of this can be automatically generated ?)
        - [ ] GET all comments -> ***GET ; /main/{article}/comments ; show ; comments.show***
        - [ ] Add new comment -> POST (date, alias, content)
            - ***GET ; /main/{article}/comments/create ; create ; comments.create***
            - ***POST ; /main/{article}/comments/ ; show ; comments.show***
        - [ ] For each comment made by the user, add and Edit button (GET comment by :id) that pops up a small edit form (POST/PATCH) + delete button (DELETE) ; manage the display according to the clicked status.
            - ***GET ; /main/{article}/comments/{comment}/edit ; edit; comments.edit ***
            - ***PATCH ; /main/{article}/comments/{comment} ; update; comments.update ***
            - ***DELETE ; /main/{article}/comments/{comment} ; destroy; comments.destroy ***

8. Single article made by user (DYNAMIC) :
    - [ ] Once clicked, GET by :id and display all contents (+ picture, if applicable)
        - [ ] Same edit functions as for the comments.
            - ***GET ; /main/{article} ; show ; article.show***

9. Create a new article :
    - [ ] Create form (see article database)
        - [ ] POST -> saved to db, then redirected to main page to see it displayed (GET from all users)
            - ***GET ; /main/create ; create ; article.create***

10. Edit/delete Article :
    - [ ] Edit form (see article database) -> GET by :id
        - ***GET ; /main/{article} ; show ; article.show***
        - ***GET ; /main/{article}/edit ; edit ; article.edit***
        - ***PATCH ; /main/{article} ; update ; article.update***
    - [ ] Cancel button (back to article)
    - [ ] Delete button -> GET by :id then DELETE
        - ***DELETE ; /main/{article} ; destroy ; article.destroy***

11. Profile page (DYNAMIC) :
    - [ ] Profile information + picture (again, see how this is done and if it's doable for me)
        - [ ] GET by :id ? or by name ? It must be associated to a specific user, and therefore must be included in the user info
            - ***GET ; /profile ; index ; profile.index***
    - [ ] Basic user info
        - [ ] Same process as with the profile (excluding the profile information -> can be done in a table format ?)

12. Edit profile / user info (STATIC) :
    - [ ] Edit forms for each
        - [ ] POST / PATCH (update) -> redirect back to profile page with updated information
        - ***GET ; /profile/edit ; edit ; profile.edit***
        - ***PATCH ; /profile/edit ; update ; profile.update***


#### Day four (20/01) and day five (21/01)
- Looking up tutorials on Laravel + official documentation on how to create the right functionalities (see Resources)
- Small updates to mockup
- Adjustments made to above summary.

---

## Resources
- Graphic charters : https://www.victoria-agency.be/blog/what-is-a-graphic-charter/2020

- Technologies
    - https://www.endpointdev.com/blog/2021/05/integrating-laravel-with-a-react-frontend/
    - https://laracasts.com/
    - https://laravel.com/docs/8.x/starter-kits

- Inspiration :
    - https://craftsmanship.net/
    - https://www.pdcacraftsmanshipforum.com/ (maybe what NOT to do ?)
    - http://www.craftsmanship-plus.eu/about.html

- Motivation :
    - https://www.youtube.com/watch?v=mxgOY2Ms-YI

- Fonts :
    - https://typ.io/fonts/gin_round
    - https://typ.io/fonts/helvetica
    - https://www.1001fonts.com/grunge-fonts.html?page=6
    - https://www.1001fonts.com/search.html?search=helvetica+light+sans-serif

- Tutorials :
    - https://www.youtube.com/watch?v=ImtZ5yENzgE&t=10595s
    - https://www.mongodb.com/compatibility/mongodb-laravel-intergration
    - https://laravel.io/forum/03-16-2014-install-laravel-to-an-existing-folder
    - https://larainfo.com/blogs/how-to-install-laravel-project-in-current-directory