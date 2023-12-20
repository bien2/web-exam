<?php 
include 'config.php';
$id = $_GET['id'];

$select = $conn->query("SELECT * FROM product_description WHERE id = '$id'");
$result = mysqli_fetch_array($select);
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
                        <h1 class="h1 mt-4">Update Product</h1>
                        <form id="updateProduct" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id" placeholder="Product Name"
                                value="<?= $result['id'] ?>">
                            <input type="text" name="name" id="name" placeholder="Product Name"
                                value="<?= $result['name'] ?>" required>
                            <input type="text" name="unit" id="unit" placeholder="Product Unit"
                                value="<?= $result['unit'] ?>" required>
                            <input type="number" step="any" name="price" id="price" value="<?= $result['price'] ?>"
                                placeholder="Product Price" required>
                            <input type="date" name="expirationDate" id="expirationDate" placeholder="Expiration Date"
                                value="<?= $result['expirationDate'] ?>" required>
                            <input type="number" name="stock" id="stock" value="<?= $result['stock'] ?>"
                                placeholder="How many stocks" required>
                            <input type="file" name="img" id="image" placeholder="Image">
                            <input type="text" name="image-default" id="defaultImage" value="<?= $result['image'] ?>">

                            <a href="index.php" class="btn btn-danger w-25 mt-4" name="submit">Cancel</a>
                            <button class="btn btn-success w-25 mt-4" name="submit">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).on('submit', '#updateProduct', function(e) {
        e.preventDefault();
        var id = document.getElementById("id").value;
        $.ajax({
            method: "POST",
            url: "update.php?id=" + id,
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: alert("Product has been updated"),
            success: location.href = "index.php",

        });
    });
    </script>
</body>

</html>