<?php
require 'inc/functions.php';
require 'inc/Database.php';
$config = require('inc/config.php');
$db = new Database($config['database'], "root", "rachad");
//$id = $_GET['id'];
//$query = "select * from posts where id = :id";
//$posts = $db->query($query, [':id' => $id])->fetch();
//dd($posts);