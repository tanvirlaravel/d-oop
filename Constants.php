<?php include_once ('inc/header.php'); ?>


<main>

    <div class="container pt-3">
        <h2 class="text-warning text-center py-3">OOP Constants</h2>
        <div class="row">
            <div class="col-md-3">
                sidebar
            </div>
            <div class="col-md-9">
                <pre class="text-warning">
&lt;?php<br>class&nbsp;Goodbye {<br>&nbsp;&nbsp;const&nbsp;LEAVING_MESSAGE =&nbsp;"Thank you for visiting W3Schools.com!";<br>}
echo&nbsp;Goodbye::LEAVING_MESSAGE;<br>?&gt;
</pre>



                <pre class="text-warning">
class Goodbye {<br>  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";<br>  public function byebye() {<br>    echo self::LEAVING_MESSAGE;<br>  }<br>} 
</pre>

            </div>
        </div>
    </div>

</main>


<?php include_once ('inc/footer.php'); ?>
