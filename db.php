<?php  
    $mysqli = new mysqli("localhost", "root", "123", "testgame");  
    if(!$mysqli)  {  
        echo"database error";  
    }else{  
        echo"php env successful";  
    }  
    $mysqli->close();  
?>  
