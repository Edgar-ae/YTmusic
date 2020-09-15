<?php
class CRUD{    

    static public function select(){
        require_once ('connection.php');
        $conn = Connection::connect();
            
        $sql = "EXEC VM_select;";
        $result = sqlsrv_query($conn, $sql);
        if(!$result){
            echo"fail";
        }else{
                $id = 0;

                $array = array();
                while($Row = sqlsrv_fetch_array($result)){

                   array_push($array, array(
                    $Row['vm_name'],
                    $Row['vm_url'],
                    //$Row['vm_img'],
                    $Row['vm_fecha']->format('m-d-Y'),
                    $Row['vm_id'],
                    $Row['vm_accountant']
                    ));

                }
                echo'<pre>';
                /* print_r($array); */
               //echo $nombre = $array[0][0];
                echo'</pre>';

        return $array;

        }
    }
    static public function selecturl($id){
        require_once ('connection.php');
        $conn = Connection::connect();

        $sql = "select vm_url from videomusical where vm_id = $id;";
        $result = sqlsrv_query($conn, $sql);
        if(!$result){
            console('fail');
        }else{
            while($Row = sqlsrv_fetch_array($result)){
                $url = $Row['vm_url'];
            }
            return $url;
        }
    }
    function views($id){
        require_once ('connection.php');
        $conn = Connection::connect();

        $sql = "select vm_accountant from videomusical where vm_id = $id;";
        $result = sqlsrv_query($conn, $sql);
        if(!$result){
        echo"fail";
        }else{

            while($Row = sqlsrv_fetch_array($result)){

                $new_vm_accountant = $Row['vm_accountant'] + 1;
    
                }

            $sql2 = "update videomusical set vm_accountant = $new_vm_accountant where vm_id = $id;";
            $result = sqlsrv_query($conn, $sql2);
            if(!$result){
            console('FALLO EN CONTADOR');
            }else{
            console("CONTADOR ACTUALIZADO: $new_vm_accountant de la ID: $id");
            }
            
        }
        
    }
}
?>
