<?php
//demonstrating for loops, and placing your php inside your HTML!
//The for loop loops through a block of code a specific number of times.
//for(initial, test, increment){
    //code to be executed;}

//celcius and farenheit

// $far = ($cel * (9/5)) + 32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Table</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table{
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }

        td, th{
            border: 1px solid lightblue;
            border-collapse: collapse;
            padding: 5px;
        }

        h1, h2 {
            text-align: center;
            margin: 10px 0px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>My Celcius/Farenheit Table</h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Farenheit</th>    
        </tr>
        <?php
            for($cel = 0; $cel <= 100; $cel += 5){
                $far = ($cel * (9/5)) + 32;
                echo '<tr>';
                    echo '<td> '.$cel.' degrees</td>';
                    echo '<td> '.$far.' degrees </td>';
                echo '</tr>';

            }
        ?>
    </table>

    <h1>I will now complete a kilometer/mileage table on my own!</h1>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>    
        </tr>
        <?php
            for($km = 0; $km <= 100; $km += 5){
                $miles = ($km * 0.62137);
                echo '<tr>';
                    echo '<td> '.$km.' km</td>';
                    echo '<td> '.$miles.' mi</td>';
                echo '</tr>';

            }
        ?>
    </table>









</body>
</html>