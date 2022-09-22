<?php
//name
//value
//expiration
$time=time()-60*60*24;
setcookie('name',"wanda",$time);
echo $_COOKIE['name'];
?>