<?php
// my variables

//a variable is just a container for data

$name = "Jonah"; //Jonah is a string
$name = 'Jonah'; //Jonah is still a string
echo $name;

$body_temp = 98; //98 is an integer
$body_temp_new = 98.6; //98.6 is a float
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";

echo "My name is $name!";
echo "<br>";
echo 'My name is $name!'; // This will not return correctly 
echo "<br>";
echo 'My name is '.$name.' !'; // Olga like single quotes, requires '. .'
echo "<br>";
echo 'The normal body temperature for a human being is '.$body_temp_new.' ';
echo "<br>";

$name = 'Sharon';
echo $name;
echo "<br>";

$x = 20;
$y = 5;
$z = $x + $y; // values are "assigned" to variables
echo $z;
echo "<br>";

$z = $x * $y;
echo $z;
echo "<br>";

$z = $x / $y;
echo $z;
echo "<br>";

$first_name = 'Jonah';
$last_name = 'Byrne';
echo $first_name.' '.$last_name;
echo "<br>";

echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.' ';

?>