<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>My form3.php</h1>
<form action="" method="post">
<fieldset>
    <label>First Name</label>
    <input type="text" name="first_name">

    <label>Last Name</label>
    <input type="text" name="last_name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Comments</label>
    <textarea name="comments"></textarea>

    <input type="submit" value="Send It!">

    <p><a href="">RESET</a></p>
</fieldset>
</form>
<?php
// if isset
if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['comments'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $comments=$_POST['comments'];

// if empty, echo "please fill out all of the fields"
// else display an echo of the information
if(empty($_POST['first_name'] &&
    $_POST['first_name'] &&
    $_POST['first_name'] &&
    $_POST['first_name'])) {
        echo '<p class="error">Please fill out all of the fields!</p>';
    } else {
        echo '
        <div class="box">
        <h2>Hello '.$first_name.' '.$last_name.'!</h2>
        <p>We have received your email as '.$email.' 
        and will be reviewing your <b>comments:</b> '.$comments.'</p>
        ';
    } //end empty
} // end isset


?>
</body>
</html>
