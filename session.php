<?php
//session is available as the user is on use on browser
session_start();
$_SESSION['name']="yorke";
echo  "hello". $_SESSION['name'];
session_destroy();
echo  "hello". $_SESSION['name'];
?>