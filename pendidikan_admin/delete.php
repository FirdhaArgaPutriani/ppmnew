<?php
require_once('../connection.php');

$id_pendidikan = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_pendidikan WHERE id = '$id_pendidikan'");

header('Location: index.php');
