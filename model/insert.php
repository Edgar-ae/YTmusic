<?php

if($_FILES['image']['type'] == 'image/jpeg'){
    //function
    inserting();
}else if($_FILES['image']['type'] == 'image/png'){
    //function
    inserting();
}else{
    die('the type of image is invalid');
}

function inserting(){

    $name = $_POST['name'];
    $url = $_POST['url'];
    $image = $_FILES['image']['tmp_name']; 
   
    //envio la imagen original a rediemncionarse
    require_once ('resize.php');
    recorteMiniaturaDeYoutube($image);
    
    //obtengo la imagen ya redimensionada
    $filename = "tmp/resized_image.jpg";
    $image_bits = base64_encode(addslashes(fread(fopen($filename, "r"), filesize($filename))));

    //proseso de guardado en la BD
    require_once ('connection.php');
    $conn = Connection::connect();

    $sql = "EXEC VM_insert '". $name ."','". $url ."','". $image_bits ."';";
    $result = sqlsrv_query($conn, $sql);
    if (!$result) {
    console('the insertion is fail');//console es una funcion mia
    rpt('the insertion is fail');
    }
    else {
    console("the insertion is successful"); 
    rpt('the insertion is successful'); 

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1><?php function rpt($txt){echo $txt;} ?></h1>
<a href="/views/settings.php">regresar</a>
</center>
    
</body>
</html>