<?php

    ob_start();

    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
    switch(THIS_PAGE){
        case 'index.php':
            $title = 'Homepage of our Website Project';
            $body = 'home';
            break;

        case 'about.php':
            $title = 'About page of our Website Project';
            $body = 'about inner';
            break;
        
        case 'daily.php':
            $title = 'Daily page of our Website Project';
            $body = 'daily inner';
            break;

        case 'project.php':
            $title = 'Project page of our Website Project';
            $body = 'project inner';
            break;

        case 'contact.php':
            $title = 'Contact page of our Website Project';
            $body = 'contact inner';
            break;

        case 'gallery.php':
            $title = 'Gallery page of our Website Project';
            $body = 'gallery inner';
            break;
    }

    $nav = array(
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily',
        'project.php' => 'Project',
        'contact.php' => 'Contact',
        'gallery.php' => 'Gallery',
    );

    function make_links($nav){
        $my_return = '';
        foreach($nav as $key => $value){
            if(THIS_PAGE == $key){
                $my_return .='<li><a class = "current" href="'.$key.'">
                '.$value.'</a></li>';
            } else {
                $my_return .= '<li><a href="'.$key.'">
                '.$value.'</a></li>';
            }
        } // end foreach
    
        return $my_return;
    
    } //end function

    $first_name = '';
    $last_name = '';
    $email = '';
    $gender= '';
    $phone = '';
    $wines = '';
    $comments = '';
    $privacy = '';
    $regions = '';
    $first_name_err = '';
    $last_name_err = '';
    $email_err = '';
    $gender_err = '';
    $phone_err = '';
    $wines_err = '';
    $comments_err = '';
    $privacy_err = '';
    $regions_err = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($_POST['first_name'])){
            $first_name_err = 'Please fill out your first name';
        } else {
            $first_name = $_POST['first_name'];
        }

        if(empty($_POST['last_name'])){
            $last_name_err = 'Please fill out your last name';
        } else {
            $last_name = $_POST['last_name'];
        }

        if(empty($_POST['email'])){
            $email_err = 'Please enter your email';
        } else {
            $email = $_POST['email'];
        }

        if(empty($_POST['gender'])){
            $gender_err = 'What, no gender?';
        } else {
            $gender = $_POST['gender'];
        }

        // if(empty($_POST['phone'])){
        //     $phone_err = 'Please enter your phone number';
        // } else {
        //     $phone = $_POST['phone'];
        // }

        if(empty($_POST['phone'])) { // if empty, type in your number
            $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
            } else{
            $phone = $_POST['phone'];
            } // end else
        } // end main if

        if(empty($_POST['wines'])){
            $wines_err = 'What, no special powers?';
        } else {
            $wines = $_POST['wines'];
        }

        if(empty($_POST['comments'])){
            $comments_err = 'Add some details to your character!';
        } else {
            $comments = $_POST['comments'];
        }

        if(empty($_POST['privacy'])){
            $privacy_err = 'Please agree to our privacy policy';
        } else {
            $privacy = $_POST['privacy'];
        }

        if($_POST['regions'] == NULL){
            $regions_err = 'Select your class!';
        } else {
            $regions = $_POST['regions'];
        }

        // wines function

        function my_wines($wines){
            $my_return = '';
            
            if(!empty($_POST['wines'])){
                $my_return = implode(', ', $_POST['wines']);
            } else {
                $wines_err = 'Please fill out your wines!';
            }// end if/else 

            return $my_return;
        } // end function

        if(isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['phone'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy'])){
            $to='oszemeo@mystudentswa.com';
            $subject = 'Test Email on ' .date('m/d/y, h i A');
            $body = '
                First Name: '.$first_name.' '.PHP_EOL.'
                Last Name: '.$last_name.' '.PHP_EOL.'
                Email: '.$email.' '.PHP_EOL.'
                Gender: '.$gender.' '.PHP_EOL.'
                Phone: '.$phone.' '.PHP_EOL.'
                Region: '.$regions.' '.PHP_EOL.'
                Wines: '.my_wines($wines).' '.PHP_EOL.'
                Comments: '.$comments.' '.PHP_EOL.'
            ';

            $headers = array(
                'From' => 'noreply@mystudentswa.com'
            );

            if(!empty($first_name && $last_name && $email && $gender && $phone
            && $regions && $wines && $comments && 
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))){
                mail($to, $subject, $body, $headers);
                header('Location:thx.php');
            }
        } //end isset

    } // end server request method

    $photos[0] = 'photo1';
    $photos[1] = 'photo2';
    $photos[2] = 'photo3';
    $photos[3] = 'photo4';
    $photos[4] = 'photo5';

    function random_images($photos){
        $i = rand(0, 4);
        $selected_image = ''.$photos[$i].'.jpg';
        $my_return = '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';
        return $my_return;
    } // end function
?>