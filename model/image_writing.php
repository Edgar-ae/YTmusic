<?php
select();
function select(){
    require_once ('connection.php');
    $conn = Connection::connect();

    $sql = "EXEC VM_select_img;";
    $result = sqlsrv_query($conn, $sql);
    if(!$result){
        console('fail in writing image');
    }else{
        $id = 0;
        while($Row = sqlsrv_fetch_array($result)){
           
           $img = base64_decode($Row["vm_img"]);//use esto y no me funciono
           $imagen = stripslashes(base64_decode($Row["vm_img"]));//eso si funciona gracias a stripslashes que se
                                                             //se encarga de Quita las barras de un string
                                                             //con comillas escapadas.
           console('img '. $id);
           //escribir la imagen
           base64_to_jpeg($imagen,"../model/tmp/BD_img/miniature_$id.jpg");
           $id++;
        }
        
    }
}
function base64_to_jpeg($base64_string, $output_file ) {
    $ifp = fopen( $output_file, "wb" ); 
    fwrite( $ifp, $base64_string );
    fclose( $ifp ); 
}

?>
