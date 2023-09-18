<?php
require_once('../connection.php');

$id_gender = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM pm_gender WHERE id = '$id_gender'");

header('Location: index.php');
