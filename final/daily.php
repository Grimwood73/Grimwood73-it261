<?php
    include('config.php');
    include('./includes/header.php');
    date_default_timezone_set('America/Los_Angeles');

    if(isset($_GET['today'])){
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }
function daily_bands($today, $genre, $pic, $alt){

echo '<h1>'.$today.' is '.$genre.' Day</h1>';

$sql = 'SELECT * FROM band WHERE genre ="'.$genre.'"';
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
        $band_pic = strtolower($row['name']);
        $img_name = str_replace(" ", "-", $band_pic);
        echo '
            
            <img src="./images/'.$img_name.'.jpg" alt="'.$alt.'">
            <ul>
                <li><b>Name:'.$row['name'].'</b></li>
                <li><b>Genre: </b>'.$row['genre'].'</li>
            </ul>
            <p>For more information about '.$row['name'].', 
            click <a href="project-view.php?id='.$row['band_id'].' ">here</a></p>
        ';
    } // end while
} else { 
    echo 'Nobody is home!';
}


//we are going to release the server
@mysqli_free_result($result);

// close the connection
@mysqli_close($iConn);
} // close function  

    switch($today){
        case 'Monday':
        $genre = 'Jazz';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'lightblue';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;
    
        case 'Tuesday':
        $genre = 'Experimental';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'lightseagreen';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;

        case 'Wednesday':
        $genre = 'Synth';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'lightcoral';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;
        
        case 'Thursday':
        $genre = 'World';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'orange';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;
    
        case 'Friday':
        $genre = 'Soul';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'lightcyan';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;
    
        case 'Saturday':
        $genre = 'Hip Hop';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'lightgray';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;
    
        case 'Sunday':
        $genre = 'Heavy';
        $pic = ''.strtolower($genre).'.jpg';
        $alt = $genre;
        $color = 'lightsalmon';
        $content = '<p></p>';
        daily_bands($today, $genre, $pic, $alt);
        break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3 Switch</title>
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background-color: <?php echo $color ?>;
    }

    img{
        max-width: 270px;
    }

    /* #wrapper{
        width: 940px;
        margin: 20px auto;
    }

    h1, h2, img{
        margin: 0 0 10px 0;

    }

    p{
        margin: 0 0 20px 0;
    } */
    </style>
</head>
<body>
<div id="wrapper">
    
    <h2>Check Out The Rest of the Week!</h2>
    <ul>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
    </ul>
</div>
<!-- end wrapper -->

<?php
    include('./includes/footer.php');
?>