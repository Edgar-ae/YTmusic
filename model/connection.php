<?php
function console($date){
    echo "<script> console.log('Debug Objects: ". $date ."')</script>";
}

console("Acces successful to connection.php");

class Connection{
    static public function connect(){

        $servername = "musicabuenardaBD2.mssql.somee.com";
        $namedatabase = "musicabuenardaBD2";
        $username = "admin-777";
        $password = "12345678";
        //SQL SERVER, CONEXION EXITOSA A EL SERVIDOR WEB

        $connectionInfo = array( "Database"=>$namedatabase, "UID"=>$username, "PWD"=>$password);

        $conn = sqlsrv_connect( $servername, $connectionInfo);

        if( $conn ) {
          console("Connection established");
          return $conn;
       }else{
          console("Conecction dont established");
          console(print_r( sqlsrv_errors(), true));
       }
     /* 
        $serverName = "localhost\SQLEXPRESS";
        $connectionInfo = array( "Database"=>"videosbuenardos_BD", "UID"=>"user_01", "PWD"=>"123");

        $conn = sqlsrv_connect( $serverName, $connectionInfo);


        if( $conn ) {
            console("Connection established");
            return $conn;
       }else{
            console("Conecction dont established");
            console(print_r( sqlsrv_errors(), true));
       } */
 }  
 /* while($Row = sqlsrv_fetch_array($result)){
         echo $Row['vm_name'];
         echo "</br>";
     } */
        
}
?>