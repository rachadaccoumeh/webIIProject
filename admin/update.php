<?php
if (isset($_GET['page'])) {
    if ($_POST['update'] == "update") {
        $query = "UPDATE";
    } else if ($_POST['update'] == "create") {
        $query = "INSERT INTO";
    }
    if ($_GET['page'] == "Users") {
        if ($_POST['user_permission']) $p = 1;
        else$p = 0;
        $query = $query . " users SET user_name='$_POST[user_name]',users_email='$_POST[users_email]',users_password='$_POST[users_password]',user_permission='$p' ";
    } else if ($_GET['page'] == "Categories") {
        $query = $query . " categories SET category_name='$_POST[category_name]', image='$_POST[image]' ";
    } elseif ($_GET['page'] == "Products") {
        $query = $query . " products SET product_name='$_POST[product_name]', product_description='$_POST[product_description]', product_price='$_POST[product_price]', count='$_POST[count]', sales='$_POST[sales]', category='$_POST[category]' ";

    }
    if ($_POST['update'] == "update") {
        $query = $query . "WHERE id='$_POST[id]'";
    }
    $db->query($query)->fetch();
    if ($_GET['page'] == "Products") {
        $query = "SELECT id FROM products WHERE product_name='$_POST[product_name]'";
        $id = $db->query($query)->fetch();
        foreach ($_POST['image_url'] as $index => $image_url) {
            $query1 = "INSERT INTO images SET image_url='$image_url',product_id='$id[id]'";
            if ($_POST['update'] == "update")
                $query1 = "UPDATE images SET image_url='$image_url' WHERE product_id='$_POST[id]'";
            $db->query($query1)->fetch();
        }
    }
    header("Location: admin.php?page=$_GET[page]");
}
?>

<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" type="text/css" href="admin/dist/css/style.css">
</head>
<body>
<?php
if (isset($_GET['id']))
    $uc = "update";
else
    $uc = "create";
include "partial/$_GET[table]Update.php";
?>
</body>
</html>