<link rel='stylesheet' href='/css/style_video.css'>
    <?php
    $ip = $_GET['ip'];
    require_once('../model/crud.php');
    $x = CRUD::selecturl($ip);
    CRUD::views($ip);
    echo "<script> console.log('video='+". $ip ."+' ". $x ."') </script>";
    ?>
        <iframe  class='container_video' 
             src="<?php echo $x ?>?autoplay=1"
             frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>
        </iframe>

<!-- ?feature=oembed&amp;autoplay=1&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=1&amp;rel=0&amp;modestbranding=1 -->
