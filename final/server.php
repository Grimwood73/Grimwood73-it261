<?php
// our server.php file - this is where our session will start
// our session is a way to store information

session_start();
include('config.php');
// this is where eventually you will have the header include
// include('./includes/header.php');

//this server.php page will be communicating to our database!!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
// if we cannot connect to the database... we DIE
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$errors = array();

// register the user, using if isset reg_user
if(isset($_POST['reg_user'])){
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // we want to make sure that all of the input fields have been filled out
    // if empty, we will use a new function called array_push()

    if(empty($first_name)){
        array_push($errors, 'First name is required!!!');
    }

    if(empty($last_name)){
        array_push($errors, 'Last name is required!!!');
    }

    if(empty($email)){
        array_push($errors, 'Email is required!!!');
    }

    if(empty($username)){
        array_push($errors, 'User name is required!!!');
    }

    if(empty($password_1)){
        array_push($errors, 'Password is required!!!');
    }

    // is password_1 == or !== to password_2
    if($password_1 !== $password_2){
        array_push($errors, 'Passwords do not match!'); 
    }

    // we are checking the username and password and selecting it from the table

    $user_check_query = "SELECT * FROM users WHERE username = '$username'
    OR email = '$email' LIMIT 1 ";

    $result = mysqli_query($iConn, $user_check_query) 
    or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    // we are going to have an if statement, and we will nest 2 additional if statements inside our main if statement
    // we cannot have duplicate usernames or duplicate emails
    if($rows){
        if($rows['username'] == $username){
            array_push($errors, 'Username already exists!');
        }

        if($rows['email'] == $email){
            array_push($errors, 'Email already exists!');
        }
    } // close big $rows if

    // do we have any errors??? 
    if(count($errors) == 0){
        $password = md5($password_1);

        // now we insert the information into our table
        $query = "INSERT INTO users (first_name, last_name, email, username, password)
        VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        // if we are successful, user will be directed to login page 
        header('Location:login.php');
    } // close count($errors) if
} // end if isset reg_user

// Now we will connect to the login page
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)){
        array_push($errors, 'User name is required!!!');
    }

    if(empty($password)){
        array_push($errors, 'Password is required!!!');
    }

    // now we count our errors, looking for 0 errors
    if(count($errors) == 0){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
    
        // a new variable called $results (different from $result)
        $results = mysqli_query($iConn, $query);

        if(mysqli_num_rows($results) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            // if successful, the user will be directed to the home page (index.php)
            header('Location:index.php');
        }else{
            array_push($errors, 'Wrong username/password combination');
        } // close else
    } // close count
} // close if isset login_user