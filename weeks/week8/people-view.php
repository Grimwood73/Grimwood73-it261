<?php
// this is our people-view page, which starts with our
// include pointing to config.php, not header.php

include('config.php');

//is our get set
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

// we will now select from the table where people id = id
$sql = 'SELECT * FROM people WHERE people_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
// on the people.php page
// AND... if we cannot connect to the database... we DIE
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
$result = mysqli_query($iConn, $sql)
//If we cannot extract data....
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than zero
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $blurb = stripslashes($row['blurb']);
        $details = stripslashes($row['details']);
        $feedback = '';
    } // end while

} else { // end if 
    $feedback = 'There is a problem!!!';
} // end else

include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to our People View Page!</h1>
    <h2>Introducing you to <?php echo $first_name;?>'s Page</h2>
    <ul>
        <?php
            echo '
                <li><b>First Name:</b> '.$first_name.'</li>
                <li><b>Last Name:</b> '.$last_name.'</li>
                <li><b>Email:</b> '.$email.'</li>
                <li><b>Birthdate:</b> '.$birthdate.'</li>
                <li><b>Occupation:</b> '.$occupation.'</li>
                <li><p>'.$details.'</p></li>
            ';
        ?>
    </ul>
    <p><a href="people.php">Return to the people page!</a></p>
</main>

<aside>
    <h3>This is my Aside!</h3>
    <figure>
        <img src="./images/people<?php echo $id;?>.jpg" 
        alt="<?php echo $first_name;?>">
        <figcaption>
            <?php
                echo '
                    '.$first_name.' '.$last_name.', '.$occupation.'
                ';
            ?>
        </figcaption>
    </figure>
    <p><i><?php echo $blurb;?></i></p>
</aside>

<?php
    // we will release the server
    @mysqli_free_result($result);

    // and close the connection
    @mysqli_close($iConn);
?>

</div> 
<!-- end wrapper -->

<?php
    include('./includes/footer.php')
?>