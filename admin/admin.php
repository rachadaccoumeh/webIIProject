<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<?php
if (isset($_COOKIE["user_id"])) {
    $userId = $_COOKIE["user_id"];
    $query = "SELECT * FROM users WHERE id=$userId and user_permission=TRUE";
    $userInfo = $db->query($query)->fetch();
    $userName = $userInfo['user_name'];
    if (!isset($userName)) {
        http_response_code(404);
        header("Status: 404 Not Found");
        exit;
    }
} else {
    http_response_code(404);
    header("Status: 404 Not Found");
    exit;
}

if (!isset($_GET['page'])) {
    $tableQuery = "SELECT p.product_name,p.product_price, COUNT(c.product_id) AS count FROM cms.products p JOIN cms.carts c ON p.id = c.product_id GROUP BY c.product_id ORDER BY count DESC LIMIT 8;";
    $usersNumberQuery = "SELECT COUNT(*) AS count FROM cms.users WHERE user_permission = 0";
    $cartNumberQuery = "SELECT COUNT(*) AS count FROM cms.carts";
    $productGtQuery = "SELECT COUNT(*) AS count FROM cms.products";
    $productEqQuery = "SELECT COUNT(*) AS count_eq_0 FROM cms.products WHERE count = 0;";
    $tables = $db->query($tableQuery)->fetchAll();
    $userNb = $db->query($usersNumberQuery)->fetch()['count'];
    $cartNb = $db->query($cartNumberQuery)->fetch()['count'];
    $productNb = $db->query($productGtQuery)->fetch()['count'];
    $productEq = $db->query($productEqQuery)->fetch()['count_eq_0'];
    $page = "Dashboard";
    include "partial/dashboard.php";
} else {
    $page = $_GET['page'];
    if ($page=="Users"){
        include "partial/user.php";
    }elseif ($page=="Categories"){
        include "partial/categories.php";
    }elseif ($page=="Products"){
        include "partial/products.php";
    }
}
include "partial/sidebar.php";
?>


<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin/plugins/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="admin/dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin/dist/js/pages/dashboard.js"></script>
</body>
</html>

