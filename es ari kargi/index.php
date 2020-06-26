<?php 
require "header.php";
?>
<main>
    <?php
        if(isset($_SESSION['userID'])){
            echo "<p>YOU ARE LOGGED IN!</p>";
        }
        else{
            echo "<p>YOU ARE LOGGED OUT!</p>";
        }
    ?>
    <p>VACANCIES</p>
    <?php
        include "data.php"
    ?>

    
    
</main>

<?php 
require "footer.php";
?>