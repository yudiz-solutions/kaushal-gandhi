<?php 
/*

Template Name: home
*/
get_header();
?>
<?php


$test = get_field('test');


?>

<div>
    <?php
foreach($test as $key) { 
echo "<pre>";
print_r($key);
echo "/<pre>";
?>

   <div>

      <h1><?php //echo "SS"; ?></h1>

      <img src="<?php //echo $image['url']; ?>" alt="<?php// echo $image['alt']; ?>">

    </div>
    <?php } ?>
    

</div>
<?php

get_footer();

?>