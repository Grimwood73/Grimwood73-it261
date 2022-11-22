<?php
$horror['Barbarian'] = 'barba_A young woman discovers the rental home she booked is already occupied by a stranger.';
$horror['Pearl'] = 'pearl_Trapped on an isolated farm, Pearl must tend to her ailing father under the watch of her mother.';
$horror['X'] = 'xxxxx_A group of actors sets out to make an adult film in rural Texas under the noses of their reclusive hosts.';
$horror['The_Lighthouse'] = 'light_Two lighthouse keepers try to maintain their sanity while living on a remote and mysterious New England island in the 1890s.';
$horror['The_Witch'] = 'witch_In 1630 New England, panic and despair envelops a farmer, his wife and their children when youngest son Samuel suddenly vanishes.';
$horror['The_Empty_Man'] = 'empty_On the trail of a missing girl, an ex-cop comes across a secretive group attempting to summon a terrifying supernatural entity.';
// variable key --------- value
//          $name --------image

include('config.php');
include('./includes/header.php');
?>


    <table>
        <?php foreach($horror as $name => $image) :?>
        <tr>
            <td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" 
                alt="<?php echo str_replace('_', ' ', $name);?>"></td>
            <td><?php echo str_replace('_', ' ', $name);?></td>
            <td><?php echo substr($image, 6);?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php
include('./includes/footer.php');
?>   
