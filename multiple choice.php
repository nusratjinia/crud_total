<?php

echo '<pre>';

print_r ($_POST);

echo '</pre>';

$hobby = '';

//echo $hobby;

echo "<br/>";

$food ='';
echo "<br/>";

$cities = '';
echo "<br/>";

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "FORM");

//echo $cities;
/*

if(isset($_POST['h-Reading']) && !empty($_POST['h-Reading'])){
    $hobby .= $_POST['h-Reading'];
    $hobby .=' ,' ;
}

if(isset($_POST['h-Travelling']) &&  !empty($_POST['h-Travelling'])){
    $hobby .= $_POST['h-Travelling'];
    $hobby .=' ,' ;
}

if(isset($_POST['h-Gardening']) &&  !empty($_POST['h-Gardening'])){
    $hobby .= $_POST['h-Gardening'];
    $hobby .=' ,';
}

if(isset($_POST['h-Mountain_Traveling']) &&  !empty($_POST['h-Mountain_Traveling'])){
    $hobby .= $_POST['h-Mountain_Traveling'];
    $hobby .=' ,';

$hobby =  rtrim($hobby,',');

$hobby =  substr($hobby,0,-1);
echo $hobby;

*/

   if(array_key_exists('h-Reading',$_POST) && !empty($_POST['h-Reading'])) {

       $hobby .= $_POST['h-Reading'];
       $hobby .= ' ,';
   }

 if(array_key_exists('h-Traveling',$_POST) && !empty($_POST['h-Traveling'])) {

     $hobby .= $_POST['h-Traveling'];
     $hobby .= ' ,';
 }
 if(array_key_exists('h-Gardening',$_POST) && !empty($_POST['h-Gardening'])) {

     $hobby .= $_POST['h-Gardening'];
     $hobby .= ' ,';
 }
 if(array_key_exists('h-Mountain_Traveling',$_POST) && !empty($_POST['h-Mountain_Traveling'])) {

     $hobby .= $_POST['h-Mountain_Traveling'];
     $hobby .= ' ,';
 }
echo $hobby;


$food = $_POST['food'];
$food = implode(",",$food);


echo $food;

$cities = $_POST['cities'];
$cities = implode(",",'cities');

echo $cities;


$query = "INSERT INTO `FORM`.`multi_selection` (
`id` ,
`full_name` ,
`hobby` ,
`food` ,
`cities` ,
`created` ,
`modified`
)
VALUES (
    '$id' , '$full_name', '$hobby', '$food', '$cities', '$2015-01-06 00:00:00', '$2015-01-13 00:00:00'
);";
