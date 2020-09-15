<?php
removed();

function removed(){
    require_once ('connection.php');
    $conn = Connection::connect();

    $id = $_POST['id'];

    $sql = "EXEC VM_deleted $id;";
    $b = sqlsrv_query($conn, $sql);

    if(!$b){
        rpt('the record not was eliminated');
    }else{
        rpt('the record was eliminated successfully');

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
        <h1><?php function rpt($txt){ echo $txt; } ?></h1>
        <a href="/views/settings.php">to Return</a>
    </center>
</body>
</html>