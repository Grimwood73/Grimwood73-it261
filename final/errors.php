<?php
// errors page, which uses a for each loop
// we are going to be counting errors
// if we have more than zero errors, we will need to echo our message

if(count($errors) > 0): ?>
    <div class="error">
        <?php foreach($errors as $error): ?>
            <p>
                <?= $error ?>
            </p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

