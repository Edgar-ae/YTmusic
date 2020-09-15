
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_template_.css">
    <title>YT_Music</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<form  method="post">
    <header>
        <div class="conteiner">
            <a href="/views/template.php">
            <img src="/img/edgar_aggre.png" alt="">
            </a>
        </div>
    </header>
    <div id="displayy" class="display_off">
        <!-- video -->
        <?php
            if(isset($_GET["ip"])){
                echo "<script>console.log('video activado');</script>";
                include('../views/pages/video.php');
            }else{
                echo "<script>console.log('fail01');</script>";
            }
        ?>        
        <!-- /videos -->
    </div>
    <div id="list" class="list_container">
        <div class="list_container-list">
            <div class="titulo">
                <p class="title">🎶Beatiful Music</p>
            </div>
            <?php 
            $img = array();
            require_once('../model/crud.php');
            $array = CRUD::select();

            require_once("../model/image_writing.php");

            $i = 0;
            
            while($i <= count($array)-1){
                array_push($img, "miniature_$i.jpg");
                $nombre = $array[$i][0];
                $url = "'". $array[$i][1] ."'";
                $date = $array[$i][2];
                $id = $array[$i][3];
            ?>
            <!--  -->
            <a href="template.php?ip=<?php echo $id;?>&i=<?php echo $i;?>">
            <div id="object_<?php echo $i ?>" class="list_object"> <!-- onclick="init_video(<?php echo $url .',' .$i?>);"> -->
                <p class="num"><?php echo $i+1 ?></p>
                <img src="<?php echo "/model/tmp/BD_img/$img[$i]"; ?>" alt="">
                <div class="title">
                    <p><?php  echo $nombre; ?></p>
                    <div class="date">
                        <p class="name">ADD: </p><p> <?php echo $date; ?></p>
                    </div>
                </div>
            </div>
            </a>
            <!--  -->
            <?php 
            $i++;
            }
            /*  */
            if(isset($_GET["ip"])){
            
                $i = $_GET['i'];
                echo "<script>
                console.log('etiquetas modoficadas');
                $('#displayy').addClass('display');
                $('#list').addClass('list_container_on');
                $('.list_object').removeClass('before');
                $('#object_".$i."').addClass('before');
                </script>";
            }else{
                echo "<script>console.log('fail#02');</script>";
            }
            ?>
        </div>
    </div>
</form>
</body>
</html>