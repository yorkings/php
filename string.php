<?php
//single and double strings
$name='cane';
$say="i am $name";//will display the real name
$say2='i am $name';//$name will be part of the sentence
echo $say.'<br>';

echo $say2;
//functions
$be=' wertqer ';
echo "1".strlen($be).'<br>';//calculate length
echo "2".trim($be).'<br>';//trims the space
echo "3".str_word_count($be).'<br>';
echo "4".strrev($be).'<br>';
echo "5".strtoupper($be).'<br>';
echo "6".strtolower($be).'<br>';
echo "7".ucfirst($be).'<br>';
//multiline
$lav="hello my name is  <br>zura <br>
i am 12<br>,
i love football.
";
echo  nl2br($lav);
?>