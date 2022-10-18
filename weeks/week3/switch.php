<?php
// Class Coffe exercise
// Introduces the isset() function

// $variable = 'This is our variable';
// if(isset($variable)){
//     echo 'Variable has been set';
// } else {
//     echo 'Variable has not been set';
// }
// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!';
// }
date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Friday':
    $coffee = '<h2>Friday is our pumpkin latte day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b>The Pumpkin Spice Latte</b> is a coffee drink made with a mix 
            of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed 
            milk, espresso, and often sugar, topped with whipped cream and pumpkin pie 
            spice.</p>';
    break;

    case 'Saturday':
    $coffee = '<h2>Saturday is our green tea latte day!</h2>';
    $pic = 'green-tea.jpg';
    $alt = 'Green Tea';
    $content = '<p><b>The Green Tea Latte</b> is a tea-based beverage combining vivid
        green matcha tea powder and milk, or a dairy substitute, to create a smooth, 
        creamy, caffeinated coffee alternative. Many tearooms and coffee shops offer 
        Matcha Lattes both hot and iced.</p>';
    break;

    case 'Sunday':
    $coffee = '<h2>Sunday is our Regular Joe day!</h2>';
    $pic = 'coffee.png';
    $alt = 'Regular Coffee';
    $content = '<p><b>Coffee</b> is a drink prepared from roasted coffee beans. Darkly 
        colored, bitter, and slightly acidic, coffee has a stimulating effect on 
        humans, primarily due to its caffeine content. It is the most popular hot 
        drink in the world.</p>';
    break;
    
    case 'Monday':
    $coffee = '<h2>Monday is our latte day!</h2>';
    $pic = 'latte.jpg';
    $alt = 'Latte';
    $content = '<p><b>Latte</b> is a coffee beverage of Italian origin made with 
        espresso and steamed milk. Variants include the chocolate-flavored mocha or 
        replacing the coffee with another beverage base such as masala chai (spiced 
        Indian tea), mate, matcha, turmeric, or rooibos; alternatives to milk, such as
        soy milk or almond milk, are also used.</p>';
    break;

    case 'Tuesday':
    $coffee = '<h2>Tuesday is our Americano day!</h2>';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = '<p><b>The Americano</b>is a type of coffee drink prepared by diluting
    an espresso with hot water, giving it a similar strength to, but different flavor
    from, traditionally brewed coffee. Its strength varies with the number of shots 
    of espresso and amount of water added.</p>';
    break;

    case 'Wednesday':
    $coffee = '<h2>Wednesday is our Frappuccino day!</h2>';
    $pic = 'frap.jpg';
    $alt = 'Frappuccino';
    $content = '<p><b>The Frappuccino</b> is a line of blended iced coffee
    drinks sold by Starbucks. It consists of coffee or crème base, blended with ice 
    and ingredients such as flavored syrups and usually topped with whipped cream and 
    or spices. Frappuccinos are also sold as bottled coffee beverages in grocery 
    stores, convenience stores and from vending machines.</p>';
    break;

    case 'Thursday':
    $coffee = '<h2>Thursday is our Cappuccino day!</h2>';
    $pic = 'cap.jpg';
    $alt = 'Cappuccino';
    $content = '<p><b>The Cappuccino</b>is an espresso-based coffee drink that 
    originated in Italy and is prepared with steamed milk foam (microfoam). Variations 
    of the drink involve the use of cream instead of milk, using non-dairy milk 
    substitutes and flavoring with cinnamon or chocolate powder. It is typically 
    smaller in volume than a caffè latte, with a thicker layer of microfoam.</p>';
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    #wrapper{
        width: 940px;
        margin: 20px auto;
    }

    h1, h2, img{
        margin: 0 0 10px 0;

    }

    p{
        margin: 0 0 20px 0;
    }
    </style>
</head>
<body>
<div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
    <?php    
    echo $coffee;
    ?>
    <img src="../../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <?php echo $content; ?>
    <h2>Check Out Our Daily Specials!</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>
</div>
<!-- end wrapper -->
</body>
</html>
