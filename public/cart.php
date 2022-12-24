<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>


<?php
$userId = $_COOKIE["user_id"];
if (isset($_GET['add']) || isset($_GET['delete'])) {
    if (isset($_GET["add"])) {
        $id = $_GET["add"];
        $query = "INSERT INTO carts(user_id, product_id) VALUES ($userId,$id)";
    } elseif (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $query = "DELETE FROM carts where product_id=$id";
    }
    $db->query($query)->fetch();
    header("Location: cart.php");
}
include "partial/navbar.php";
$productQuery = "SELECT products.* FROM products INNER JOIN carts ON products.id = carts.product_id WHERE carts.user_id = 1";

include "partial/cartInfo.php";
include "partial/footer.php";
?>


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="public/lib/easing/easing.min.js"></script>
<script src="public/lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="public/js/main.js"></script>
</body>

</html>