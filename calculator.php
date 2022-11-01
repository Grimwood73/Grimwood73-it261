<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Trip Calculator</title>
    <link href="css/calculator-styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name']))
                echo htmlspecialchars($_POST['name']);?>">

            <label>Total miles</label>
            <input type="number" name="miles" value="<?php if(isset($_POST['miles']))
                echo htmlspecialchars($_POST['miles']);?>">

            <label>How fast do you typically drive?</label>
            <input type="number" name="speed" value="<?php if(isset($_POST['speed']))
                echo htmlspecialchars($_POST['speed']);?>">
            
            <label>How many hours per day do you plan to drive?</label>
            <input type="number" name="hours" value="<?php if(isset($_POST['hours']))
                echo htmlspecialchars($_POST['hours']);?>">

            <!-- radio buttons -->
            <label>Price of Gas</label>
            <ul>
                <li><input type="radio" name="price" value="4.00" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 4.00)
                        echo 'checked="checked"';    
                    ?>>$4.00</li>
                <li><input type="radio" name="price" value="4.50" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 4.50)
                        echo 'checked="checked"';    
                    ?>>$4.00</li>
                <li><input type="radio" name="price" value="5.00" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 5.00)
                        echo 'checked="checked"';    
                    ?>>$5.00</li>
                <li><input type="radio" name="price" value="5.50" 
                    <?php if(isset($_POST['price']) && $_POST['price'] == 5.50)
                        echo 'checked="checked"';    
                    ?>>$5.50</li>
                
            </ul>

            <label>Fuel Efficiency</label>
            <select name="mpg">
              <option value="" NULL 
                <?php if(isset($_POST['mpg']) && $_POST['mpg'] == NULL)
                    echo 'selected="unselected"';    
                ?>>Select one!</option>  
              <option value="10mpg" 
                <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '10mpg')
                    echo 'selected="selected"';    
                ?>>Bad @ 10mpg</option>  
              <option value="20mpg" 
                <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '20mpg')
                    echo 'selected="selected"';    
                ?>>Alright @ 20mpg</option> 
              <option value="30mpg" 
                <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '30mpg')
                    echo 'selected="selected"';    
                ?>>Good @ 30mpg</option> 
              <option value="40mpg" 
                <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '40mpg')
                    echo 'selected="selected"';    
                ?>>Great @ 40mpg</option> 
            </select>
            <input type="submit" value="Calculate">

            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
    //starts with server request method
    //if the fields are not empty, elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name'])){
            echo '<p class="error">Please fill out your name!</p>';
        }
        if(empty($_POST['miles'])){
            echo '<p class="error">Please fill out your total miles!</p>';
        }
        if(empty($_POST['speed'])){
            echo '<p class="error">Please fill out your speed!</p>';
        }
        if(empty($_POST['hours'])){
            echo '<p class="error">Please fill out your driving hours per day!</p>';
        }
        if(empty($_POST['price'])){
            echo '<p class="error">Please check your price!</p>';
        }
        if($_POST['mpg'] == NULL){
            echo '<p class="error">Please choose your fuel efficiency!</p>';
        }


        if(isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency'],
        $_POST['bank'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $bank = $_POST['bank'];
            $dollars = $currency * $amount;

            if(!empty($name && $amount && $currency && $bank)){
                echo '
                <div class="box">
                    <h2>Hello '.$name.', </h2>
                    <p>You now have <b>$'.number_format($dollars, 2).' American dollars</b>, and we will be 
                    emailing you at <b>'.$email.'</b> with your information, as well as depositing your
                    funds at <b>'.$bank.'!</b></p>
                </div>
                ';
            }
        }




    } //end server request





    ?>

</body>
</html>