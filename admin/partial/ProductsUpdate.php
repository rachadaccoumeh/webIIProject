<?php
$query = "SELECT * FROM products WHERE id='$_GET[id]'";
$dataShow = $db->query($query)->fetch();

$query = "SELECT * FROM images WHERE product_id='$_GET[id]'";
$images = $db->query($query)->fetchAll();

?>
<form action="update.php?page=<?php echo $_GET['table'] ?>" method="post">
    <p>update <?php echo "$_GET[table]" ?> data</p>
    <p>
        <input type="hidden" name="id" value="<?php echo $dataShow['id']; ?>">
        Name : <input type="text" name="product_name" required value="<?php echo $dataShow['product_name']; ?>"> <br>
        Description: <input type="text" name="product_description" required
                            value="<?php echo $dataShow['product_description']; ?>"> <br>
        Price: <input type="text" name="product_price" required value="<?php echo $dataShow['product_price']; ?>"> <br>
        Count: <input type="number" name="count" required value="<?php echo $dataShow['count']; ?>"> <br>
        Sales: <input type="number" name="sales" required value="<?php echo $dataShow['sales']; ?>"> <br>
        Category: <input type="text" name="category" required value="<?php echo $dataShow['category']; ?>"> <br>
    </p>
    <?php foreach ($images as $image): ?>
        <input type="text" name="image_url[]" value="<?php echo $image['image_url']; ?>"> <br>
    <?php endforeach;
    if (count($images) == 0)
    echo "Image <input type=\"text\" name=\"image_url[]\" value=\"\"> <br>";
    ?>
    <input type="submit" name="update" value="<?php echo $uc ?>">
</form>