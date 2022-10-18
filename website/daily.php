<?php
    include('./includes/header.php');
    date_default_timezone_set('America/Los_Angeles');

    if(isset($_GET['today'])){
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }
    
    switch($today){
        case 'Monday':
        $song = '<h2>Blue Monday by New Order</h2>';
        $pic = 'blue-monday.jpg';
        $alt = 'Photo of New Order';
        $color = 'lightblue';
        $content = '<p><b>Blue Monday</b> is a synth-pop and alternative dance song that drew inspirations 
        from many works of other artists.  It was released as a 12-inch single on 7 
        March 1983 through Factory Records. The song appeared on certain cassette and 
        CD versions of the band\'s second studio album, Power, Corruption & Lies 
        (1983). (from Wikipedia)</p>';
        break;
    
        case 'Tuesday':
        $song = '<h2>Ruby Tuesday by the Rolling Stones</h2>';
        $pic = 'ruby-tuesday.jpg';
        $alt = 'Photo of Ruby Tuesday single';
        $color = 'lightcoral';
        $content = '<p><b>Ruby Tuesday</b> is a song recorded by the Rolling Stones in
        1966, released in January 1967. The song became the band\'s fourth number-one 
        hit in the United States and reached number three in the United Kingdom as a 
        double A-side with "Let\'s Spend the Night Together". 
        Rolling Stone magazine ranked the song number 310 on their list of the 500 
        Greatest Songs of All Time. (from Wikipedia)</p>';
        break;
    
        case 'Wednesday':
        $song = '<h2>Wednesday Morning by Chicano Batman</h2>';
        $pic = 'wednesday-morning.jpg';
        $alt = 'Photo of Chicano Batman album Cycle of Existential Rhythms';
        $color = 'lightsalmon';
        $content = '<p><b>Lyrics</b><br> Vida e que voce faz
        E! que voce…... faz!
        <br>
        And as I wake up <br>
        I see the light <br>
        I wake up <br>
        I see the light <br>
        So then I’m there the sun is bright <br>
        I am the move <br>
        I’m taking flight <br>
        Call me Sunshine lady <br>
        Your colors have filled me with so much love <br>
        Flying dove we’re high above <br>
        All the things you see <br>
        Come and fly with me <br>
        We’re already there <br>
        When we stare in each others eyes <br>
        There’s no thoughts theres only peace <br>
        There’s only love <br>
        There’s only love</p>';
        break;
        
        case 'Thursday':
        $song = '<h2>Thursday in the Danger Room by Run the Jewels</h2>';
        $pic = 'thursday-in-the-dangerroom.jpg';
        $alt = 'Comic-strip illustration of Run the Jewels';
        $color = 'lightgrey';
        $content = '<p><b>Run the Jewels</b> are known for fiery live performances, 
        the kind of hard-hitting shows that make you want to light up a blunt and 
        have a party. Sometimes they rock so hard you might forget that Killer Mike 
        and El-P are actually incredibly thoughtful dudes (even if they make mistakes)
        who are masters of the rapped word. Last night on Colbert, they showed off 
        that side with a performance of “Thursday in the Danger Room”. (from 
        Consequence Sound)</p>';
        break;
    
        case 'Friday':
        $song = '<h2>Friday by Rebecca Black</h2>';
        $pic = 'friday.jpg';
        $alt = 'Photo of Rebecca Black';
        $color = 'lightpink';
        $content = '<p><b>Rebecca Renee Black</b> gained extensive media coverage when 
        the music video for her 2011 single "Friday" went viral on YouTube and other 
        social media sites. "Friday" was derided by many music critics and viewers, 
        who dubbed it "the worst song ever". (from Wikipedia)</p>';
        break;
    
        case 'Saturday':
        $song = '<h2>Baron Saturday by The Pretty Things</h2>';
        $pic = 'baron-saturday.jpg';
        $alt = 'Baron Saturday single';
        $color = 'lightseagreen';
        $content = '<p><b>Lyrics</b><br> Oh! baron Saturday<br>
        Sorrow, he\'ll show you games to play<br>
        He bends his mouth up to your ear<br>
        The words won\t disappear<br>
        He\'ll take your eyes out for a ride<br>
        Through an eyeglass of tears it\'s not clear.<br>
        Oh! baron Saturday<br>
        White visions black, mister malady<br>
        Neath a sky of milk<br>
        You\'re drinking silk<br>
        You\'ve fast the runcible spoon<br>
        On satin plates<br>
        Young maidens wait<br>
        To be devoured in the glare of the moon.<br>
        Except for baron Saturday<br>
        Your life was cool<br>
        Good senses rule<br>
        Throw your life away.<br>
        Oh! baron Saturday<br>
        Let him steal your mind away<br>
        He\'ll show you the grave<br>
        Of someone who was saved<br>
        From living their life in a year<br>
        He\'ll show you the grave.<br>
        Of someone who was saved<br>
        From taking his life with a knife.<br>
        Except for baron Saturday<br>
        Your life was cool<br>
        Good senses rule<br>
        Throw your life away</p>';
        break;
    
        case 'Sunday':
        $song = '<h2>Sunday Morning by The Velvet Underground</h2>';
        $pic = 'sunday-morning.jpg';
        $alt = 'Sunday Morning vinyl single';
        $color = 'lightyellow';
        $content = '<p><b>Sunday Morning</b>is a song by the Velvet Underground. It is the opening 
        track on their 1967 debut album The Velvet Underground & Nico. It was also 
        released as a single in 1966. The song is written in the key of F major. (from Wikipedia)</p>';
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
    <h1>Song of the Day</h1>
    <?php    
    echo $song;
    ?>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <?php echo $content; ?>
    <h2>Check Out Our Daily Song!</h2>
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