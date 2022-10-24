<?php    

if (isset($_POST['num1'],
        $_POST['num2'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num1_int = intval($num1);
$num2_int = intval($num2);
$myTotal = $num1_int + $num2_int;
    if($num1 == NULL && $num2 == NULL){
    echo 'Please enter the number values';
    } else {
    echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
    echo '<p style="color:red;">and the answer is <br> '.$myTotal.'!</p>';
    }
echo '<p><a href="">Reset page</p></a>';
} else {
    echo '
<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1 style="color:green;">Adder.php</h1> 
<form action="" method="post">
    <label>Enter the first number:</label><input type="text" name="num1"><br>
    <label>Enter the second number:</label><input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>

 


</body>
</html> 
';
}
?>

<!--
    line 21 removed \ from <form>
    line 23 and 24 - added <label> opening tags
    line 24 put <\label> closing tag at the end of the label
    line 25 added closing "  
    line 3 moved )){ to end of line 5
    line 4 added new line with $_POST['num2']
    line 7 changed $myTotal -= $num1 + $Num2; to $myTotal = $num1 + $num2;
        (capitalization and -= changed)
    line 24 changed Num1 to num1
    line 8 changed double quotes to single quotes, added </h2> closing tag
    line 10 added '. .' around variable, put </p> tag inside closing quote
    line 11 removed closing quote, added </p> tag and ;
    line 12 added an else statement to echo the form
    line 22 added method="post" to <form> tag
    line 21 added style="color:green;" to <h1>
    EXTRA CREDIT: added the following code, lines 7-12
    $num1_int = intval($num1);
    $num2_int = intval($num2);
    $myTotal = $num1_int + $num2_int;
    if($num1 == NULL && $num2 == NULL){
    echo 'Please enter the number values';
    } else {
    echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
    echo '<p style="color:red;">and the answer is <br> '.$myTotal.'!</p>';
    }
-->
