<?php

$name = get_field('name');
$image = get_field('image');
?>




<h1><?php echo $name; ?></h1>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">





