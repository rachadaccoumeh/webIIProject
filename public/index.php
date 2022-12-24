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
include "partial/navbar.php";
if (!isset($_GET['product']) && !isset($_GET['category'])) {
    include "partial/carousel.php";
    include "partial/categories.php";
    $productQuery = "SELECT p.*, MAX(i.image_url) as image FROM products p LEFT JOIN images i ON p.id = i.product_id GROUP BY p.id ";
    $categoryTitle = "Recent Products";
    include "partial/products.php";

} else {
    if (isset($_GET['category'])) {
        $categoryId = $_GET['category'];
        $query = "SELECT category_name FROM categories WHERE id=$categoryId";
        $categoryTitle = $db->query($query)->fetch()["category_name"];
        $productQuery = "SELECT p.*, MAX(i.image_url) as image FROM products p LEFT JOIN images i ON p.id = i.product_id where p.category=$categoryId GROUP BY p.id ";
        include "partial/products.php";
    } else if (isset($_GET['product'])) {
        $productId = $_GET['product'];
        $productQuery = "SELECT * FROM products where id=$productId";
        $imgQuery = "SELECT * FROM images where product_id=$productId";
        include "partial/productDetails.php";
    }else if (isset($_GET['cart'])){

    }
}
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