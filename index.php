<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css"  rel="stylesheet">
</head>
<body>
    <h1><a href="index.php">Jonah's Portal Page</a></h1>    
    <h2>The Navigation Below Represents Our BIG Assignments</h2>
    <div id="wrapper">
        <nav>
        <ul>
            <li><a href="">Switch</a></li>
            <li><a href="">Troubleshoot</a></li>
            <li><a href="">Calculator</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
        </nav>

        <main>
        <h2>About Jonah</h2>
        <p>Hello! My name is Jonah Byrne. I'm a violin and fiddle player and teacher. I love music
            of all kinds, movies, writing stories, and roleplaying games. I'm back in school
            after about 10 years to learn some new skills and get in to web development.
        </p>
        <img id="bio_img" src="images/bio_headshot.png" alt="photo of Jonah">
        </main>

        <aside>
        <h2>Weekly Class Exercises</h2>
        <h3>Week 2</h3>
            <ul>
                <li><a href="weeks/week2/var.php">Vars</a></li>
                <li><a href="weeks/week2/vars2.php">Vars2</a></li>
                <li><a href="weeks/week2/currency.php">Currency</a></li>
                <li><a href="weeks/week2/currency-logic.php">Currency-Logic</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc</a></li>
            </ul>

        </aside>
        <div>
            <img class="screenshot" src="images/MAMP_screenshot.png" alt="screenshot of installed MAMP">
            <img class="screenshot" src="images/error_reporting_screenshot.png" alt="screenshot of error reporting"> 
        </div>
    </div>
    <!-- close wrapper -->
<footer>
    <ul>
        <li>Copyright &copy;
            2022</li>
        <li>All Rights Reserved</li>
        <li><a href="index.php">Web Design by Jonah Byrne</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>
        
    <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>
</body>
</html>