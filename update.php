<?php 

include 'config.php';

    $id = $_GET['id'];
    $name = $_POST['name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expirationDate = $_POST['expirationDate'];
    $stock = $_POST['stock'];
    $image = $_FILES['img'];


   
    
    if($_FILES['img']['name'] == "") {
        $fileName = $_POST['image-default'];
    } else {
        $fileName = $_FILES["img"]["name"];
        $fileTmpName = $_FILES["img"]["tmp_name"];
        move_uploaded_file($fileTmpName, "images/" . $fileName);
    }
 
     $conn->query("UPDATE product_description SET name = '$name', unit = '$unit',price = '$price', expirationDate = '$expirationDate', stock = '$stock', image = '$fileName' WHERE id = '$id'");


?>