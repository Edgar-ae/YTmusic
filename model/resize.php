<?php
function console2($date){
    echo "<script> console.log('Debug Objects: ". $date ."')</script>";
}

console2("Acces successful to resize.php");



function recorteCuadradoCentral(){
    $temporal = $_FILES['imagen']['tmp_name'];
    $nombre   = $_FILES['imagen']['name'];
    //abrir la foto original
    $original = imagecreatefromjpeg($temporal);
    $ancho_original = imagesx($original);
    $alto_original = imagesy($original);
    $c = $ancho_original - $alto_original;
    $centrador = $c / 2;
    echo  $centrador;

    $ancho_nuevo = 200;
    $alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);
    //crear una lienzo vacio (foto destino 750400)
    $copia = imagecreatetruecolor($alto_nuevo, $alto_nuevo);

    //copia original -> copia
    //1-2 destino-original
    //3-4 eje X-Y pegado --> 0,0
    //5-6 eje X-Y original --> 0,0
    //7-8 encho-alto destino --> WIDTH -HEIGHT
    //9-10 ancho-alto original --> WIDTH -HEIGHT
    imagecopyresampled($copia, $original,0,0,$centrador,0, $ancho_nuevo,$alto_nuevo,
    $ancho_original,$alto_original);

    //exportar/guardar imagen
    imagejpeg($copia, "tmp/".$nombre);
}

function recorteMiniaturaDeYoutube($temporal){
    $nombre   = "resized_image.jpg";
    //abrir la foto original
    $original = imagecreatefromjpeg($temporal);
    $ancho_original = imagesx($original);
    $alto_original = imagesy($original);

    $ancho_nuevo = 200;
    $alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);

    $alto = $ancho_nuevo / 1.777;
    //crear una lienzo vacio (foto destino 750400)
    $copia = imagecreatetruecolor($ancho_nuevo, $alto);

    //copia original -> copia
    //1-2 destino-original
    //3-4 eje X-Y pegado --> 0,0
    //5-6 eje X-Y original --> 0,0
    //7-8 encho-alto destino --> WIDTH -HEIGHT
    //9-10 ancho-alto original --> WIDTH -HEIGHT
    imagecopyresampled($copia, $original,0,0,0,0, $ancho_nuevo, $alto_nuevo,
    $ancho_original,$alto_original);

    //exportar/guardar imagen
    imagejpeg($copia, "tmp/".$nombre);
}

function recorteManteniendoDimensionesDeImagen(){
    $temporal = $_FILES['imagen']['tmp_name'];
    $nombre   = $_FILES['imagen']['name'];
    //abrir la foto original
    $original = imagecreatefromjpeg($temporal);
    $ancho_original = imagesx($original);
    $alto_original = imagesy($original);
    //crear una lienzo vacio (foto destino 750400)
    $ancho_nuevo = 200;
    $alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);
    $copia = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);

    //copia original -> copia
    //1-2 destino-original
    //3-4 eje X-Y pegado --> 0,0
    //5-6 eje X-Y original --> 0,0
    //7-8 encho-alto destino --> WIDTH -HEIGHT
    //9-10 ancho-alto original --> WIDTH -HEIGHT
    imagecopyresampled($copia, $original,0,0,0,0, $ancho_nuevo, $alto_nuevo,
    $ancho_original,$alto_original);

    //exportar/guardar imagen
    imagejpeg($copia, "tmp/".$nombre);

    echo $temporal;
    echo '<br>';
    echo $copia;
    $contents = fread($copia, filesize("tmp/".$nombre));
    echo $contents;
}




/* //abrir la foto original
$original = imagecreatefromjpeg($temporal);
$ancho_original = imagesx($original);
$alto_original = imagesy($original);
//crear una lienzo vacio (foto destino 750400)
$copia = imagecreatetruecolor(400, 400);

//copia original -> copia
//1-2 destino-original
//3-4 eje X-Y pegado --> 0,0
//5-6 eje X-Y original --> 0,0
//7-8 encho-alto destino --> WIDTH -HEIGHT
//9-10 ancho-alto original --> WIDTH -HEIGHT
imagecopyresampled($copia, $original, 0,0,0,0, 700, 400,$ancho_original,$alto_original);

//exportar/guardar imagen
imagejpeg($copia, "tmp/".$nombre); */

?>