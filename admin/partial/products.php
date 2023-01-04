<!doctype html>
<html lang="eng">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>
<body>


<table class="table" style="margin-left: 250px;width:calc(100% - 250px)">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">product_name</th>
        <th scope="col">product_description</th>
        <th scope="col">product_price</th>
        <th scope="col">count</th>
        <th scope="col">sales</th>
        <th scope="col">category</th>
        <th scope="col">Image</th>
        <th scope="col">Operation</th>
    </tr>
    </thead>
    <?php
    $table = "Products";
    $sql = "SELECT p.*, MAX(i.image_url) as Image FROM products p LEFT JOIN images i ON p.id = i.product_id GROUP BY p.id ";
    $result = $db->query($sql)->fetchAll();
    foreach ($result as $row) {
        echo "
    <tbody>
    <tr>
      <td style='width:50px;'>$row[id]</td>
      <td style='width:100px;'>$row[product_name]</td>
      <td style='width:100px;'>$row[product_description]</td>
      <td style='width:50px;'>$row[product_price]</td>
      <td>$row[count]</td>
      <td>$row[sales]</td>
      <td>$row[category]</td>
      <td><img style='width: 100px; height: 100px' src=\"$row[Image]\"></td>
      <td >
        <a class=\"btn btn-dark\" href=\"update.php?table=$table\">add </a>
        <a class='btn btn-success' type='submit' name='edit' href='update.php?id=$row[id]&table=$table'>Edit</a>
        <a class='btn btn-danger' type='submit' name='delete' href='delete.php?id=$row[id]&table=$table'>Delete</a>
      </td>
    </tr>
  </tbody>
  ";

    }
    ?>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


</body>
</html>