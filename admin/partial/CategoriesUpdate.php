<?php
$query = "SELECT * FROM $_GET[table] WHERE id='$_GET[id]'";
$dataShow = $db->query($query)->fetch();
?>
<form action="update.php?page=<?php echo $_GET['table'] ?>" method="post">
    <p>update <?php echo "$_GET[table]" ?> data</p>
    <p>
        <input type="hidden" name="id" value="<?php echo $dataShow['id']; ?>">
        Name : <input type="text" name="category_name" required value="<?php echo $dataShow['category_name']; ?>"> <br>
        Image: <input type="text" name="image" required value="<?php echo $dataShow['image']; ?>"> <br>
    </p>
    <input type="submit" name="update" value="<?php echo $uc ?>">
</form>