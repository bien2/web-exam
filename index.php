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
                <div class="col-12" id="product-table">
                    <h1 class="h1 mt-4">Products</h1>
                    <div class="products-content mt-4" style="overflow-x:auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Expiration Date</th>
                                    <th>Stock</th>
                                    <th>Invetory Cost</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="my-data">

                                <td>asd</td>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "data.php",
            dataType: "html",
            success: function(data) {
                $('#my-data').html(data);
            }
        });
    });
    </script>


</body>

</html>