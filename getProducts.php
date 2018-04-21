<?php
    header('Content-type:application/json;charset=utf-8');
    include("_include/config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
         
        $sql="SELECT * FROM product";
        $result=mysqli_query($bd,$sql);
        $row=mysqli_fetch_array($result);
        //$active=$row['active'];
        $count=mysqli_num_rows($result);
        

        //echo $count."\n";
        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count>0)
        {
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = array_map('utf8_encode', $r);
                // $rows[] = $r;
            }
            echo json_encode($rows);
            //echo $rows."\n";
            
        }
    }
?>