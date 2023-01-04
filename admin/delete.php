<?php


if (isset($_GET['id']) && isset($_GET['table'])) {
    if ($_GET['table'] == "Products") {
        $query = "DELETE FROM images WHERE product_id =$_GET[id]";
        $db->query($query)->fetch();
    }
    $query = "DELETE FROM $_GET[table] WHERE id =$_GET[id]";
    $db->query($query)->fetch();
    header("location: admin.php?page=$_GET[table]");

}