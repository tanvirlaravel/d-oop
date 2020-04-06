<?php include_once ('inc/header.php'); ?>


<main>

    <div class="container pt-3">
        <h2 class="text-warning text-center py-3">PHP Date and Time</h2>
        <div class="row">
            <div class="col-md-3">
                sidebar
            </div>
            <div class="col-md-9">

                <h3>Session?</h3>
                <p>
                    A session is a way to store information (in variables) to be used across multiple pages.
                </p>
                <p>
                    A session is a way to store information (in variables) to be used across multiple pages.
                </p>

                <p>When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</p>
                <p>Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</p>
                <p>So; Session variables hold information about one single user, and are available to all pages in one application.</p>

                <p class="bg-warning">
                    Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
                </p>




                <p class="bg-warning">
                    How does it work? How does it know it's me?

                </p>
                <p>
                    Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.
                </p>





            </div>
        </div>
    </div>

</main>


<?php include_once ('inc/footer.php'); ?>
