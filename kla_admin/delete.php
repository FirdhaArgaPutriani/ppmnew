<?php
require_once('../connection.php');

$id_kla = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM pm_kla WHERE id = '$id_kla'");

header('Location: index.php');
