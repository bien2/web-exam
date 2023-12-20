<?php 

include 'config.php';



    $name = $_POST['name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expirationDate = $_POST['expirationDate'];
    $stock = $_POST['stock'];
    $image = $_FILES['img'];
    //File upload
    $fileName = $_FILES["img"]["name"];
    $fileTmpName = $_FILES["img"]["tmp_name"];

    move_uploaded_file($fileTmpName, "images/" . $fileName);

 
    $conn->query("INSERT INTO product_description (name, unit, price, expirationDate, stock, image) VALUES ('$name', '$unit', '$price', '$expirationDate', '$stock', '$fileName')");


?>