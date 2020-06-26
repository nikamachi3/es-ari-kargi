<?php
    require "includes/dbh.inc.php";
    echo "<br>";
    $sql = "SELECT * FROM vacancy";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        for ($x = 0; $x < $resultCheck; $x++){
            echo implode(" ",mysqli_fetch_assoc($result));
            echo "<br>";
        }
    }

?>