<?php
$fruits=["apples","banana","mangoes"];
//print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';
//specify elements by index
echo $fruits[2];
//converting  sring into an arry
$drug="baw,ret,twe";
echo '<pre>';
var_dump(explode(",",$drug));
echo '</pre>';
//converting elements to string
 echo implode(".",$fruits);
 //searching
 echo '<pre>';
var_dump(array_search("banana",$fruits));
echo '</pre>';
//merge
$vegetables=["rice","cabbage","sukuma"];
echo '<pre>';
var_dump(array_merge($vegetables,$fruits));
echo '</pre>';
//sort
sort($fruits);
echo '<pre>';
 var_dump($fruits);
echo '<pre>'
?>