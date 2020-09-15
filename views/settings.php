<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="/model/insert.php" method="POST" enctype="multipart/form-data">
        <h1>Insertar</h1>
        <input type="text" name="name" placeholder="name" required value=""><br/><br/>
        <input type="text" name="url" placeholder="url" required value=""><br/><br/>
        <input type="file" name="image" required><br/><br/>
        <input type="submit" value="to accept">
        </form>
        <hr>
        <form action="/model/remove.php" method="POST">
        <h1>Eliminar</h1>
        <input type="text" name="id" placeholder="id" required value=""><br/><br/>
        <input type="submit" value="to accept">
        
        </form>
        <hr>
        <div>
            <?php
            require_once('../model/crud.php');
            $ex = CRUD::select();
            $i = 0;
            while($i <= count($ex)-1){
                echo "<div style='display:flex; width:100%;justify-content: center;'>
                <p style='color: red;'>[ID]</p>
                <p>=";
                echo$ex[$i][3];
                echo"</p>
                <p style='color: red;'>[NAME]</p>
                <p>=";
                echo$ex[$i][0];
                echo"</p>
                <p style='color: red;'>[VIEWS]</p>
                <p>=";
                echo$ex[$i][4];
                echo"</p>
                
                </div>";
               
                $i++;
            }
            echo'<hr>';
            /* echo'<pre>';
            print_r($ex);
            echo'</pre>'; */
            
            ?>
        </div>
        
    </center>
    
</body>
</html>