<?php
require_once('../connection.php');

$id_ipm = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM pm_ipm WHERE id = '$id_ipm'");

header('Location: index.php');
