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
            <li><a href="website/daily.php">Switch</a></li>
            <li><a href="adder.php">Troubleshoot</a></li>
            <li><a href="calculator2.php">Calculator</a></li>
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
        <h3>Week 3</h3>
            <ul>
                <li><a href="weeks/week3/arrays.php">Arrays</a></li>
                <li><a href="weeks/week3/date.php">Date</a></li>
                <li><a href="weeks/week3/foor-loop.php">For-Loop</a></li>
                <li><a href="weeks/week3/if.php">If</a></li>
                <li><a href="weeks/week3/index.php">Index</a></li>
                <li><a href="weeks/week3/switch.php">Switch</a></li>
            </ul>
            <h3>Week 4</h3>
            <ul>
                <li><a href="weeks/week4/form-get.php">Form-get</a></li>
                <li><a href="weeks/week4/form1.php">Form1</a></li>
                <li><a href="weeks/week4/form2.php">Form2</a></li>
                <li><a href="weeks/week4/form3.php">Form3</a></li>
                <li><a href="weeks/week4/arithmetic-form.php">Arithmetic Form</a></li>
                <li><a href="weeks/week4/celcius.php">Celcius Converter</a></li>
            </ul>
            <h3>Week 5</h3>
            <ul>
                <li><a href="weeks/week5/currency1.php">Currency 1</a></li>
                <li><a href="weeks/week5/currency2.php">Currency 2</a></li>
                <li><a href="weeks/week5/currency3.php">Currency 3</a></li>
                <li><a href="weeks/week5/null.php">Null</a></li>
            </ul>
            <h3>Week 6</h3>
            <ul>
                <li><a href="weeks/week6/form.php">Form</a></li>
                <li><a href="weeks/week6/form2.php">Form 2</a></li>
                <li><a href="weeks/week6/functions.php">Functions</a></li>
                <li><a href="weeks/week6/thx.php">Thx</a></li>
            </ul>
            <h3>Week 7</h3>
            <ul>
                <li><a href="weeks/week7/form3.php">Form 3</a></li>
                <li><a href="weeks/week7/pictures.php">Pictures</a></li>
                <li><a href="weeks/week7/strings.php">Strings</a></li>
                <li><a href="weeks/week7/rand.php">Rand</a></li>
            </ul>
            <h3>Week 8</h3>
            <ul>
                <li><a href="weeks/week8/people.php">People</a></li>
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