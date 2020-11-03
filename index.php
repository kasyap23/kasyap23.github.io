
<?php

include 'scripts/brand_send.php';
include 'scripts/influ_send.php';
include 'scripts/send.php';

if($_POST["submit"]=="brand-submit")
{
   brandSend();
}
if($_POST["submit"]=="influ-submit")
{
    influSend();
}
if($_POST["submit"]=="submit")
{
   send();
}




function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    echo "<h4>We received your info...</h4>";


    echo "<h4>We'll get in touch with you as soon as possible...</h4>";

    echo "<h4>Redirecting to our website...</h4>";
    
    sleep(2);

        die();
}
redirect("index.html");


?>
