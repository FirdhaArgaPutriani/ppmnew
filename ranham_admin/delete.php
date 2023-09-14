<?php
require_once('../connection.php');

$id_ranham = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_ranham WHERE id = '$id_ranham'");

header('Location: index.php');
