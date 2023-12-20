<?php 
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <section class="nav">
        <div class="container minWidth">
            <div class="row">
                <div class="col-12">
                    <div class="add-a-product-content" id="add-product">
                        <h1 class="h1 mt-4">Add Product</h1>
                        <form id="addProduct" method="POST" enctype="multipart/form-data">
                            <input type="text" name="name" id="name" placeholder="Product Name" required>
                            <input type="text" name="unit" id="unit" placeholder="Product Unit" required>
                            <input type="number" step="any" name="price" id="price" placeholder="Product Price"
                                required>
                            <input type="date" name="expirationDate" id="expirationDate" placeholder="Expiration Date"
                                required>
                            <input type="number" name="stock" id="stock" placeholder="How many stocks" required>
                            <input type="file" name="img" id="image" required>
                            <button class="btn btn-success w-100 mt-4" name="submit">Add a Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).on('submit', '#addProduct', function(e) {
        e.preventDefault();

        $.ajax({
            method: "POST",
            url: "add.php",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: alert("Product has been added to the database"),

        });
    });
    </script>
</body>

</html>