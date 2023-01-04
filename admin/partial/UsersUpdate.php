<?php
$query = "SELECT * FROM $_GET[table] WHERE id='$_GET[id]'";
$dataShow = $db->query($query)->fetch();
?>
<form action="update.php?page=<?php echo $_GET['table'] ?>" method="post">
    <p><?php echo $uc . " ";
        echo "$_GET[table]"; ?> </p>
    <p>
        <input type="hidden" name="id" value="<?php echo $dataShow['id']; ?>">
        Name : <input type="text" name="user_name" required value="<?php echo $dataShow['user_name']; ?>"> <br>
        Email: <input type="text" name="users_email" required value="<?php echo $dataShow['users_email']; ?>"> <br>
        Password: <input type="text" name="users_password" required value="<?php echo $dataShow['users_password']; ?>">
        <br>
        Permission: <input type="checkbox" name="user_permission"
                           value="1" <?php if ($dataShow['user_permission'] == 1) echo 'checked'; ?>> <br>
    </p>
    <input type="submit" name="update" value="<?php echo $uc ?>">
</form>