<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
<h1>Welcome to our People Database Class Exercise</h1>
<?php
$sql = 'SELECT * FROM people';
// now we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
// on the people.php page
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
            <h2>Information About: '.$row['first_name'].'</h2>
            <ul>
                <li><b>First Name: </b>'.$row['first_name'].'</li>
                <li><b>Last Name: </b>'.$row['last_name'].'</li>
                <li><b>Birth Year: </b>'.$row['birthdate'].'</li>
            </ul>
            <p>For more information about '.$row['first_name'].', 
            click <a href="people-view.php?id='.$row['people_id'].' ">here</a></p>
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

<aside>
    <h3>I will display my random images here!</h3>
</aside>

</div> <!-- end wrapper -->

<?php 
include('./includes/footer.php');
?>