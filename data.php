<?php 

include 'config.php';

$select = $conn->query("SELECT * FROM product_description");
while($data = $select->fetch_assoc()){

$expDate = $data['expirationDate'];
$expDate = date('F d, Y', strtotime($expDate));
$id = $data['id'];

//Inventory Cost
$totalCost = $data['price'] * $data['stock'];

?>
<tr id="<?= $id ?>">
    <td><?= $data['name'];?></td>
    <td><?= $data['unit'] ?></td>
    <td><?= $data['price'] ?></td>
    <td><?= $expDate ?></td>
    <td><?= $data['stock'] ?></td>
    <td><?= $totalCost ?></td>
    <td><img src="/images/<?= $data['image'] ?>" alt="" height="200px" width="200px"></td>

    <td>
        <a href="updateForm.php?id=<?= $id ?>" class="btn btn-success w-100 mb-1"> Update</a>
        <button class="btn btn-danger w-100" onclick="deleteData('<?= $id ?>')">Delete</button>

    </td>
</tr>
<?php } ?>

<script>
function deleteData(id) {
    $.ajax({
        url: 'delete.php?id=' + id,
        type: 'DELETE',
        success: function(html) {
            alert("Deleted Succesfully");
            document.getElementById(id).style.display = "none";
        }
    });
}
</script>