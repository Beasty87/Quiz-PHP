<?php

session_start();

if(isset($_POST["logout"]))
{
    session_unset();
    session_destroy();
    header("location:nikola_kviz.php?logged_out=1");
}


?>