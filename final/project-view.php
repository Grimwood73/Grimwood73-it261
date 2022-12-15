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
$sql = 'SELECT * FROM band WHERE band_id = '.$id.' ';

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
        $genre = stripslashes($row['genre']);
        $description = stripslashes($row['description']);
        $feedback = '';
    } // end while

} else { // end if 
    $feedback = 'There is a problem!!!';
} // end else

$lowercase_name = strtolower($name);

$img_name = str_replace(" ", "-", $lowercase_name);

include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Check out <b><?php echo $name;?></b></h1>
        <?php
            echo '
                
                <p>'.$description.'</p>
            ';
        ?>
    <p><a href="project.php">Return to the full lineup</a></p>
</main>

<aside>
    <figure>
        <img src="./images/<?php echo $img_name;?>.jpg" 
        alt="<?php echo $name;?>">
    </figure>
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