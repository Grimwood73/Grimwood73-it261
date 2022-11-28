<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Contact Jonah</legend>
            
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php 
                if(isset($_POST['first_name']))  echo htmlspecialchars($_POST['first_name']);?>">
                <span class="error"><?php echo $first_name_err ;?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php 
                if(isset($_POST['last_name']))  echo htmlspecialchars($_POST['last_name']);?>">
                <span class="error"><?php echo $last_name_err ;?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php 
                if(isset($_POST['email']))  echo htmlspecialchars($_POST['email']);?>">
                <span class="error"><?php echo $email_err ;?></span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder = "xxx-xxx-xxxx" value="<?php 
                if(isset($_POST['phone']))  echo htmlspecialchars($_POST['phone']);?>">
                <span class="error"><?php echo $phone_err ;?></span>
            
            <label>What Is Your Character's Gender?</label>
            <ul>
                <li>
                    <input type="radio" name="gender" value="female" <?php 
                        if(isset($_POST['gender']) && $_POST['gender'] == 'female') 
                        echo 'checked ="checked"';?>>Female
                </li>
                
                <li>
                    <input type="radio" name="gender" value="male" <?php 
                        if(isset($_POST['gender']) && $_POST['gender'] == 'male') 
                        echo 'checked ="checked"';?>>Male
                </li>
                
                <li>
                    <input type="radio" name="gender" value="neither" <?php 
                        if(isset($_POST['gender']) && $_POST['gender'] == 'neither') 
                        echo 'checked ="checked"';?>>Neither
                </li>
            </ul>
            <span class="error"><?php echo $gender_err ;?></span>

            <label>Character Class</label>
            <select name="regions">
                <option value="" <?php 
                        if(isset($_POST['regions']) && $_POST['regions'] == NULL) 
                        echo 'selected = "unselected"';?>>Select One!
                </option>

                <option value="nw" <?php 
                        if(isset($_POST['regions']) && $_POST['regions'] == 'nw') 
                        echo 'selected = "selected"';?>>Warrior
                </option>

                <option value="sw" <?php 
                        if(isset($_POST['regions']) && $_POST['regions'] == 'sw') 
                        echo 'selected = "selected"';?>>Wizard
                </option>

                <option value="mw" <?php 
                        if(isset($_POST['regions']) && $_POST['regions'] == 'mw') 
                        echo 'selected = "selected"';?>>Thief
                </option>
            </select>
            <span class="error"><?php echo $regions_err ;?></span>

            <label>Special Powers</label>
            <ul>
                <li>
                    <input type="checkbox" name="wines[]" value="cab"
                    <?php if(isset($_POST['wines']) && in_array('cab', $wines))
                    echo 'checked = "checked"';?>>Fire Breathing
                </li>

                <li>
                    <input type="checkbox" name="wines[]" value="merlot"
                    <?php if(isset($_POST['wines']) && in_array('merlot', $wines))
                    echo 'checked = "checked"';?>>Flying
                </li>

                <li>
                    <input type="checkbox" name="wines[]" value="syrah"
                    <?php if(isset($_POST['wines']) && in_array('syrah', $wines))
                    echo 'checked = "checked"';?>>Invisibility
                </li>

                <li>
                    <input type="checkbox" name="wines[]" value="red"
                    <?php if(isset($_POST['wines']) && in_array('red', $wines))
                    echo 'checked = "checked"';?>>Magic Sword
                </li>

                <li>
                    <input type="checkbox" name="wines[]" value="malbec"
                    <?php if(isset($_POST['wines']) && in_array('malbec', $wines))
                    echo 'checked = "checked"';?>>Lightning 
                </li>
            </ul>
            <span class="error"><?php echo $wines_err ;?></span>

            

            <label>Character Details</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo 
                htmlspecialchars($_POST['comments']) ?></textarea>
                <span class="error"><?php echo $comments_err ;?></span>

            <label>Privacy</label>
            <ul>
                <li>
                    <input type="radio" name="privacy" value="yes" <?php 
                        if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') 
                        echo 'checked ="checked"';?>>Privacy
                </li>
            </ul>
            <span class="error"><?php echo $privacy_err ;?></span>

            <input type="submit" value="Send It!">

            <input type="button" onclick="window.location.href='<?php 
            echo $_SERVER['PHP_SELF'] ; ?>'" value = "Reset">

        </fieldset>
    </form>