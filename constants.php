<?php
//magic constants
/*echo __DIR__. '<br>';
echo __FILE__. '<br>';
echo __LINE__. '<br>';
mkdir('test');
rename('test','const');
rmdir('const'); */
echo file_get_contents('fr.md'). '<br>';//read file
//write
file_put_contents('rer.txt',"i love you");
//check
echo file_exists('rer.txt');

?>