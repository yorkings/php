<?php
echo date('y-m-d H:i:s'). '<br>';
//YESTERDAY
echo(date('y-m-d H:i:s',time()-60*60*24)). '<br>';
//format
echo date('F j Y H:i:s'). '<br>';
//printing the current time
echo time();
//parsing
$p=date_parse('2022-12-04 02:00:43');
echo '<pre>';
var_dump( $p);
echo '</pre>';

?>