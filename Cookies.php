<?php include_once ('inc/header.php'); ?>


<main>

    <div class="container pt-3">
        <h2 class="text-warning text-center py-3">PHP Cookies</h2>
        <div class="row">
            <div class="col-md-3">
                sidebar
            </div>
            <div class="col-md-9">

                <h3>What is a Cookie?</h3>
                <p>
                    A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too.
                </p>

                <p class="bg-warning">
                    Note: The setcookie() function must appear BEFORE the &lt;html&lt; tag
                </p>

                <p class="bg-warning">
                    Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
                </p>





            </div>
        </div>
    </div>

</main>


<?php include_once ('inc/footer.php'); ?>
