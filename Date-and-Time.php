<?php include_once ('inc/header.php'); ?>


<main>

    <div class="container pt-3">
        <h2 class="text-warning text-center py-3">PHP Date and Time</h2>
        <div class="row">
            <div class="col-md-3">
                sidebar
            </div>
            <div class="col-md-9">
                <code> date(format,timestamp)</code>
                <p>timestamp Optional</p>

                <hr>


                <pre class="text-white">
d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
Other characters, like"/", ".", or "-" can also be inserted between the characters 
to add additional formatting.
                </pre>
                <pre class="text-warning">
&lt;?php<br>echo "Today is " . date("Y/m/d") . "&lt;br>";<br>echo "Today is " . date("Y.m.d") . "&lt;br>";<br>echo "Today is " . date("Y-m-d") . "&lt;br>";<br>echo "Today is " . date("l");<br>?> 
</pre>

                <pre class="text-white">
&copy; 2010-&lt;?php echo date("Y");?>
</pre>


                <pre class="text-white">
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)

</pre>
                <hr>

                <p>
                    Note that the PHP date() function will return the current date/time of the server!
                </p>

                <p>
                    If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.
                </p>
                <p>
                    So, if you need the time to be correct according to a specific location, you can set the timezone you want to use
                </p>

                <pre class="text-warning">
&lt;?php
date_default_timezone_set("America/New_York");<br>
echo "The time is " . date("h:i:sa");<br>
?&gt;
</pre>
                <hr>

                <p> The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
                </p>

                <code>
                    mktime(hour, minute, second, month, day, year)
                </code>

                <pre class="text-warning">
&lt;?php<br>$d=mktime(11, 14, 54, 8, 12, 2014);<br>echo "Created date is " . date("Y-m-d h:i:sa", $d);<br>?>    
</pre>

                <hr>
                <br>
                <p>
                    Create a Date From a String With strtotime()
                </p>
                The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
                <p>

                </p>


                <code>
                    strtotime(time, now)
                </code>
                <pre class="text-warning">
&lt;?php<br>$d=strtotime("10:30pm April 15 2014");<br>echo "Created date is " . date("Y-m-d h:i:sa", $d);<br>?>   
</pre>

                <pre class="text-warning">
&lt;?php<br>$d=strtotime("tomorrow");<br>echo date("Y-m-d h:i:sa", $d) . "&lt;br>";<br><br>$d=strtotime("next Saturday");<br>echo date("Y-m-d h:i:sa", $d) . "&lt;br>";<br><br>$d=strtotime("+3 Months");<br>echo date("Y-m-d h:i:sa", $d) . "&lt;br>";<br>?>
</pre>

                <pre class="text-warning">
&lt;?php<br>$startdate = strtotime("Saturday");<br>$enddate = strtotime("+6 weeks", $startdate);
while&nbsp;($startdate &lt; $enddate) {<br>&nbsp;&nbsp;echo&nbsp;date("M d", $startdate) .&nbsp;"&lt;br&gt;";<br>&nbsp; $startdate = strtotime("+1 week", $startdate);<br>}<br>?&gt;</pre>


                <pre class="text-warning">
&lt;?php<br>$d1=strtotime("July 04");<br>$d2=ceil(($d1-time())/60/60/24);<br>echo "There are " . $d2 ." days until 4th of July.";<br>?>
</pre>



            </div>
        </div>
    </div>

</main>


<?php include_once ('inc/footer.php'); ?>
