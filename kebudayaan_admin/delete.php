<?php
require_once('../connection.php');

$id_kebudayaan = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_kebudayaan WHERE id = '$id_kebudayaan'");

header('Location: index.php');
