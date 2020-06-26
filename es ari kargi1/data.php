<?php
    require "includes/dbh.inc.php";
    echo "<br>";
    $sql = "SELECT * FROM vacancy";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        echo $row["Company_name"]."<br>";
        echo $row["Vacancy_category"]."<br>";
        echo $row["Pitch"]."<br>";
    }

?>