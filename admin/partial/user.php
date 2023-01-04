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


<table class="table" style="margin-left: 250px; width:calc(100% - 250px)">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">user name</th>
        <th scope="col">users email</th>
        <th scope="col">users password</th>
        <th scope="col">user permission</th>
        <th scope="col">Operation</th>
    </tr>
    </thead>
    <?php
    $table = "Users";
    $sql = "SELECT * FROM $table";
    $result = $db->query($sql)->fetchAll();
    foreach ($result as $row) {
        echo "
    <tbody>
    <tr>
      <th style='width:50px;'>$row[id]</th>
      <td style='width:175px;'>$row[user_name]</td>
      <td >$row[users_email]</td>
      <td >$row[users_password]</td>
      <td style='width:50px;'>$row[user_permission]</td>
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