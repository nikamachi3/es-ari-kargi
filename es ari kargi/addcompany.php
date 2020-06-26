<?php 
require "header.php";
?>
<main>
    <h1>ADDCOMPANY</h1>
     <form action="includes/addcompany.inc.php" method="post"> 
        <input type="text" name="company_name" placeholder="Name">
        <input type="text" name="vacancy_category" placeholder="Category">
        <input type="text" name="pitch" placeholder="Text">
        <button type="submit" name="company-submit">ADDCOMPANY</button>
            </form>

    
</main>

<?php 
require "footer.php";
?>