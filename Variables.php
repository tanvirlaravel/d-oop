<?php include_once ('inc/header.php'); ?>


<main>

    <div class="container pt-3">
        <h2 class="text-warning text-center py-3">PHP Variables</h2>
        <div class="row">


            <div class="col-md-3">
                sidebar
            </div>


            <div class="col-md-9">

                <h3>PHP Variables Scope</h3>
                <ul class="list-group list-group-flush my-3">
                    <li class="list-group-item text-white bg-dark">local</li>
                    <li class="list-group-item text-white bg-dark">global</li>
                    <li class="list-group-item text-white bg-dark">static</li>
                </ul>


                <p>
                    Global and Local Scope
                </p>

                <pre class="text-warning">
&lt;?php<br>$x =&nbsp;5;&nbsp;// global scope

function&nbsp;myTest() {<br>&nbsp;&nbsp;&nbsp;&nbsp;// using x inside this function will generate an error<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;";<br>}<br>myTest();
echo&nbsp;"&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;";<br>?&gt;

                </pre>

                <pre class="text-warning">

&lt;?php<br>function&nbsp;myTest() {<br>&nbsp;&nbsp;&nbsp; $x =&nbsp;5;&nbsp;// local scope<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;";<br>}<br>myTest();
// using x outside the function will generate an error<br>echo&nbsp;"&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;";<br>?&gt;

                </pre>
                <p>The global keyword is used to access a global variable from within a function.</p>
                <p>
                    PHP also stores all global variables in an array called $GLOBALS[index].
                </p>

                <p class="bg-warning px-3">
                    Note: However; all variable names are case-sensitive!
                </p>
                <pre class="text-warning">

&lt;?php<br>function&nbsp;myTest()&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;$x =&nbsp;0;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$x;<br>&nbsp;&nbsp;&nbsp; $x++;<br>}

myTest();<br>myTest();<br>myTest();<br>?&gt;
                </pre>

                <p>
                    Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
                </p>

                <p class="bg-warning px-3">
                    Note: The variable is still local to the function.
                </p>


            </div>


        </div>
    </div>

</main>


<?php include_once ('inc/footer.php'); ?>
