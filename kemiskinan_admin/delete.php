<?php
require_once('../connection.php');

$id_kemiskinan = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM pm_kemiskinan WHERE id = '$id_kemiskinan'");

header('Location: index.php');
