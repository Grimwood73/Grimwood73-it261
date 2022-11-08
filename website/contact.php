<?php
    include('config.php');
    include('./includes/header.php');
    date_default_timezone_set('America/Los_Angeles');
?>

<div id="wrapper">
    <main>
        <h1>Welcome to our Contact Page!</h1>

        <?php 
            include('./includes/form.php';)
        ?>
    </main>
    <aside>

    </aside>
</div>
<!-- end wrapper -->

<?php
    include('./includes/footer.php');
?>