<?php
error_reporting(0);
//include- returns warning only - execution will continue
// require-fatalerror -warning - stop execution
//include_once require_once


include_once('oops.php');
//index - numeric array
$arr = array('abc',"xyz","pqr","sdhfg",123,true,78.90);

echo "<br> array is $arr[2]";

$len = count($arr);
echo "<br>  length is $len";

echo "<br> check if array or not--".is_array($arr);
$res = in_array("abcvdfgfgc",$arr);
echo "<br>  value is available or not $res";

echo "<pre>";
print_r($arr); //to display error
var_dump($arr);
var_export($arr);
$user = array(
    "id"=>101,
    "name"=>"test",
    "age"=>25,
    "salary"=>27000
);
 print_r($user);

 echo "<br> User id is -- $user[id]";

 echo "</pre>";
 foreach ($user as $key => $value) {
    # code...   
    echo "<br> $key is $value";
 }

 //Associative Array
 $fname=array("a"=>"Peter","Peter1","ab"=>"Ben","ac"=>"Joe");
 $age=array("a"=>"35","abbbbs"=>"37","acc"=>"43","test");

 $merge_arr = array_combine($fname,$age);
 echo "<pre>";
 print_r($fname);
 print_r($age);
 print_r($merge_arr);
 $merge_arr = array_merge($fname,$age);
 print_r($merge_arr);



?>