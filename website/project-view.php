<?php
// this is our project-view page, which starts with our
// include pointing to config.php, not header.php

include('config.php');

//is our get set
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

// we will now select from the table where project id = id
$sql = 'SELECT * FROM spaceship WHERE spaceship_id = '.$id.' ';

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
        $name = stripslashes($row['name']);
        $class = stripslashes($row['class']);
        $length = stripslashes($row['length']);
        $source = stripslashes($row['source']);
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
    <h1>Welcome to our Spaceship View Page</h1>
    <h2>Introducing you to the <?php echo $name;?></h2>
    <ul>
        <?php
            echo '
                <li><b>Name:</b> '.$name.'</li>
                <li><b>Class:</b> '.$class.'</li>
                <li><b>Length:</b> '.$length.'</li>
                <li>From <b>'.$source.'</b></li>
                <li><p>'.$details.'</p></li>
            ';
        ?>
    </ul>
    <p><a href="project.php">Return to the spaceships page</a></p>
</main>

<aside>
    <figure>
        <img src="./images/spaceship<?php echo $id;?>.jpg" 
        alt="<?php echo $name;?>">
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