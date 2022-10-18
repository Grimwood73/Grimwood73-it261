<?php
// date function and if statement
echo date('Y');
echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo date('l, F j, Y h:i: A');
echo '<br>';

$name = 'Jonah';
$our_time = date('H:i A');
echo $our_time;

// If the time is less than or equal to 11, then it is morning
// if the time is less than or equal to 17, then it is afternoon
// else it is evening

if($our_time <= 11){
    echo '<h2 style="color:yellow;">Good Morning, '.$name.'!</h2>
    <img src="../../images/sun.png" alt="picture of the sun">
    <p>It\s time to get up!</p>
    ';
} elseif($our_time <= 17){
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'!</h2>
    <img src="../../images/cloud.png" alt="picture of the cloud">
    <p>Don\t forget to eat and stay hydrated!</p>
    ';
    
} else{
    echo '<h2 style="color:blue;">Good Evening, '.$name.'!</h2>
    <img src="../../images/moon.png" alt="picture of the moon">
    <p>It\s time to get sleepy!</p>
    ';
}
