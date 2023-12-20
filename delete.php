<?php 

include 'config.php';



 $id = $_GET['id'];
    
 $conn->query("DELETE FROM product_description WHERE id = '$id'");



?>