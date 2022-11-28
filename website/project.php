<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
<h1>Welcome to our Spaceships Database Page!</h1>
<?php
$sql = 'SELECT * FROM spaceship';
// now we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
// AND... if we cannot connect to the database... we DIE
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
$result = mysqli_query($iConn, $sql)
//If we cannot extract data....
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than zero
if(mysqli_num_rows($result) > 0){
    // we will be reading those rows with a while loop
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <h2>Information About the '.$row['name'].'</h2>
            <ul>
                <li><b>Name:'.$row['name'].'</b></li>
                <li><b>Class: </b>'.$row['class'].'</li>
                <li><b>Length: </b>'.$row['length'].' meters</li>
                <li>From <b>'.$row['source'].'</b></li>
            </ul>
            <p>For more information about '.$row['name'].', 
            click <a href="project-view.php?id='.$row['spaceship_id'].' ">here</a></p>
        ';
    } // end while
} else { 
    echo 'Nobody is home!';
}

//we are going to release the server
@mysqli_free_result($result);

// close the connection
@mysqli_close($iConn);

?>
</main>

</div> <!-- end wrapper -->

<?php 
include('./includes/footer.php');
?>