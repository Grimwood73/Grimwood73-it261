<?php
// Our first form


if(isset($_GET['name'], $GET['email'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
} else{
    echo '
        <form action = "" method="get">
            <label>NAME</label>
            <input type="text" name="name">
            <label>EMAIL</label>
            <input type="email" name="email">
            <input type ="submit" value="Confirm">
        </form>
    ';
}










?>