<?php
echo '<h2>Time for our navigation, which will again have a key and a value</h2>';
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach($nav as $key => $value){
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
}
echo '</ul>';

echo '<h2>Our navigation will display a different color when on the index.php page</h2>';
//we are defining a constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//we are adding an if statement - if we are on THIS_PAGE and it is index.php, then do something
echo '<ul>';
foreach($nav as $key => $value){
    if(THIS_PAGE == $key){
        echo '<li><a style="color:red;" href="'.$key.'">'.$value.'</a></li>';
    } else {
        echo '<li><a style="color:green;" href="'.$key.'">'.$value.'</a></li>';
    }
} //end foreach
echo '</ul>';



?>