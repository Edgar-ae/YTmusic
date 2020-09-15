<?php

/* 

ESTE METODO NO SE ESTA USANDO, PERO ES BUENO TENERLO

*/

$filename = "tmp/beastars.jpg";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));

$Fotografia = base64_encode(addslashes(fread(fopen($filename, "r"), filesize($filename))));
fclose($handle);

echo $Fotografia;
/* header("content-type:image/jpeg");
print stripslashes(base64_decode($Fotografia));  */

?> 